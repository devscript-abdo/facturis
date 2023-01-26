<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finance\Sell\Estimate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Document\EstimateStoreRequest;
use App\Models\Client;
use App\Models\Finance\Estimate;
use Illuminate\Http\Request;

class EstimateController extends Controller
{


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

    }
}
