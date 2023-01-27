<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finance\Sell\Estimate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Document\ArticleStoreRequest;
use App\Http\Requests\Document\EstimateDeleteRequest;
use App\Http\Requests\Document\EstimateStoreRequest;
use App\Models\Client;
use App\Models\Finance\Estimate;
use App\Models\Utilities\PaymentMethod;
use App\Models\Utilities\Tax;
use Illuminate\Http\Request;
use App\Services\Commercial\Remise\RemiseCalculator;
use App\Services\Commercial\Taxes\TVACalulator;

class EstimateController extends Controller
{
    use TVACalulator;
    use RemiseCalculator;

    public function index()
    {
        $estimates = Estimate::simplePaginate(10);

        $clients = Client::select(['id', 'entreprise'])->get();

        return view('pages.estimate.index', compact('estimates', 'clients'));
    }

    public function store(EstimateStoreRequest $request)
    {

        $data = $request->validated();

        $estimate = Estimate::create($data);

        $estimate->client()->associate($data['client'])->save();

        return redirect(route('finance:sells:estimates.edit', $estimate->uuid))->with('success', "Le devis a éte crée avec success");
    }

    public function edit(Estimate $estimate)
    {

        $payments = PaymentMethod::select(['id', 'name'])->get();

        $taxes = Tax::select(['id', 'taux_percent'])->get();

        $estimate->load('articles');

        return view('pages.estimate.edit.index', compact('estimate', 'payments', 'taxes'));
    }

    public function update(ArticleStoreRequest $request, Estimate $estimate)
    {
        if (!empty($this->hasItems($request))) {

            $estimate->articles()->createMany($this->hasItems($request));

            $totalPrice = $estimate->articles->sum('price_total');

            $totalTaxes = $estimate->articles->sum('price_tax');

            $totalHT = $estimate->articles->sum('price_ht');

            $data = ['price_total' => $totalPrice, 'price_tax' => $totalTaxes, 'price_ht' => $totalHT];

            $estimate->update($data);

            return redirect(route('finance:sells:estimates.edit', $estimate->uuid))->with('success', "Le devis a éte modifier avec success");
        }

        return redirect()->back()->with('error', 'Problem ... !!');
    }

    private function hasItems(Request $request)
    {

        $articlesData = collect($request->articles)->map(function ($item) {

            if ($item['remise'] && $item['remise'] > 0 && $item['remise'] !== 0) {

                $itemPrice = $item['price_uni'] * $item['quantity'];
                $finalePrice = $this->caluculateRemise($itemPrice, $item['remise']);
                $tauxRemise = $this->calculateOnlyRemise($itemPrice, $item['remise']);

                $totalPrice = $this->caluculateTotalWithTax($finalePrice, $item['taux_tax']);
                $taxePrice = $this->calculateOnlyTax($finalePrice, $item['taux_tax']);

                $prices = [
                    'price_total' => $totalPrice,
                    'price_ht' => $finalePrice,
                    'price_tax' => $taxePrice,
                    'taux_remise' => $tauxRemise
                ];

                return collect($item)->merge($prices);
            }
            $prices = [
                'price_total' => $this->caluculateTotalWithTax($item['price_uni'] * $item['quantity'], $item['taux_tax']),
                'price_ht' => ($item['price_uni'] * $item['quantity']),
                'price_tax' => $this->calculateOnlyTax(($item['price_uni'] * $item['quantity']), $item['taux_tax']),
                'remise' => '0'
            ];

            return collect($item)->merge($prices);
        })->toArray();

        $articles = array_filter(array_map('array_filter', $articlesData));

        return $articles;
    }

    public function delete(EstimateDeleteRequest $request)
    {

        $estimate = Estimate::whereUuid($request->estimateId)->first();

        //$this->authorize('delete', $estimate);

        if ($estimate) {

            $estimate->articles()->delete();

            $estimate->delete();

            return redirect(route('finance:sells:estimates'))->with('success', 'Le DEVIS a été supprimer avec success');
        }

        return redirect()->back()->with('success', 'Problem ... !!');
    }
}
