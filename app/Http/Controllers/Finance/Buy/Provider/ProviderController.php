<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finance\Buy\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Provider\ProviderDeleteRequest;
use App\Http\Requests\Provider\ProviderStoreRequest;
use App\Http\Requests\Provider\ProviderUpdateRequest;
use App\Models\Finance\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::simplePaginate(10);

        return view('pages.provider.index', compact('providers'));
    }

    public function create()
    {
        // $devis = Currency::select(['id', 'name'])->get();

        return view('pages.provider.create.index');
    }

    public function store(ProviderStoreRequest $request)
    {
        $data = $request->validated();

        $provider = Provider::create($data);

        return redirect(route('finance:sells:providers.edit', $provider->uuid))->with('success', "L'ajoute a éte effectuer avec success");
    }

    public function edit(Provider $provider)
    {
        //$this->authorize('update', $client);

        $provider->load('telephones', 'emails');

        return view('pages.provider.edit.index', compact('provider'));
    }

    public function update(ProviderUpdateRequest $request, Provider $provider)
    {
        $data = $request->validated();

        $provider->update($data);

        return redirect(route('finance:sells:providers.edit', $provider->uuid))->with('success', "L' Update a éte effectuer avec success");
    }

    public function delete(ProviderDeleteRequest $request)
    {

        $provider = Provider::whereUuid($request->providerId)->first();

        //$this->authorize('delete', $provider);

        if ($provider) {

            $provider->delete();

            return redirect(route('finance:sells:providers'))->with('success', 'Le fournisseur a été supprimer avec success');
        }

        return redirect()->back()->with('success', 'Problem ... !!');
    }
}
