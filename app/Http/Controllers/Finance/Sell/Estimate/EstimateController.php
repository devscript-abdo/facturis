<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finance\Sell\Estimate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Document\ArticleStoreRequest;
use App\Http\Requests\Document\EstimateDeleteRequest;
use App\Http\Requests\Document\EstimateStoreRequest;
use App\Models\Client;
use App\Models\Finance\Estimate;
use App\Models\Utilities\Currency;
use App\Models\Utilities\PaymentMethod;
use App\Models\Utilities\Tax;
use Illuminate\Http\Request;
use App\Services\Commercial\Remise\RemiseCalculator;
use App\Services\Commercial\Taxes\TVACalulator;
use App\Services\Sell\ArticleCalculateService;

class EstimateController extends Controller
{
    use TVACalulator;
    use RemiseCalculator;
    use ArticleCalculateService;

    public function index()
    {
        $estimates = Estimate::with('client:id,entreprise')->simplePaginate(10);

        $clients = Client::select(['id', 'entreprise'])->get();

        return view('pages.estimate.index', compact('estimates', 'clients'));
    }

    public function store(EstimateStoreRequest $request)
    {

        $data = $request->validated();

        $estimate = Estimate::create($data);

        $estimate->client()->associate($data['client'])->save();

        return redirect(route('app:estimates.edit', $estimate->uuid))->with('success', "Le devis a éte crée avec success");
    }

    public function edit(Estimate $estimate)
    {

        $payments = PaymentMethod::select(['id', 'name'])->get();
        
        $devis = Currency::select(['id', 'name'])->get();

        $taxes = Tax::select(['id', 'taux_percent'])->get();

        $estimate->load('articles');

        return view('pages.estimate.create.index', compact('estimate', 'payments', 'taxes', 'devis'));
    }

    public function update(ArticleStoreRequest $request, Estimate $estimate)
    {
        if (!empty($this->hasItems($request))) {

            $data = $this->hasItems($request);

            $estimate->articles()->createMany($data);

            $totalPrice = $estimate->articles->sum('price_total');

            $totalTaxes = $estimate->articles->sum('price_tax');

            $totalHT = $estimate->articles->sum('price_ht');

            $data = ['due_date' => $request->due_date, 'price_total' => $totalPrice, 'price_tax' => $totalTaxes, 'price_ht' => $totalHT];

            $estimate->update($data);

            return redirect(route('finance:sells:estimates.edit', $estimate->uuid))->with('success', "Le devis a éte modifier avec success");
        }

        return redirect()->back()->with('error', 'Problem ... !!');
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
