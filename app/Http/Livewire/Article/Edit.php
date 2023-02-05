<?php

namespace App\Http\Livewire\Article;

use App\Http\Requests\Document\ArticleStoreRequest;
use App\Models\Finance\Article;
use Livewire\Component;
use App\Services\Commercial\Remise\RemiseCalculator;
use App\Services\Commercial\Taxes\TVACalulator;
use Illuminate\Database\Eloquent\Collection;

class Edit extends Component
{
    use TVACalulator;
    use RemiseCalculator;

    public Article $article;
    public Collection $taxes;

    public $document;

    public $designation;

    public $description;

    public $quantity;

    public $price_uni;

    public $remise;

    public $price_ht;

    public $taux_tax;

    public function render()
    {
        return view('livewire.article.edit');
    }

    public function mount()
    {
        $this->designation = str_replace('<br />', '', $this->article->designation);
        $this->description = str_replace('<br />', '', $this->article->description);
        $this->quantity = $this->article->quantity;
        $this->price_uni = $this->article->price_uni;
        $this->remise = $this->article->remise;
        $this->price_ht = $this->article->price_ht;
        $this->taux_tax = $this->article->taux_tax;
    }

    public function rules()
    {
        return (new ArticleStoreRequest())->rules();
    }

    public function updateArticle()
    {
        $document = $this->document;

        $article = $this->article;

        $oldArticlePrice = $article->price_ht;

        if ($article && $document) {
            $itemPrice = $this->price_uni * $this->quantity;
            $finalePrice = $this->caluculateRemise($itemPrice, $this->remise ?? 0);
            $tauxRemise = $this->calculateOnlyRemise($itemPrice, $this->remise ?? 0);

            $article->update([
                'designation' => $this->designation,
                'description' => $this->description,
                'quantity' => $this->quantity,
                'price_uni' => $this->price_uni,
                'price_ht' => $finalePrice,
                'remise' => $this->remise ?? 0,
                'taux_remise' => $tauxRemise ?? 0,
            ]);
        }

        $totalPrice = ($document->price_ht - $oldArticlePrice) + $article->montant_ht;
        $document->price_ht = $totalPrice;
        $document->price_total = $this->caluculateTva($totalPrice);
        $document->price_tax = $this->calculateOnlyTva($totalPrice);

        $document->save();

        $document->histories()->create([
            'user_id' => auth()->id(),
            'user' => auth()->user()->full_name,
            'detail' => 'a modifier un article depuis le DEVIS ',
            'action' => 'update',
        ]);

        return redirect($document->edit_url)->with('success', "L'article a été modifier avec success");
    }
}
