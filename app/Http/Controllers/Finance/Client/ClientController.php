<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finance\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ClientDeleteRequest;
use App\Http\Requests\Client\ClientStoreRequest;
use App\Http\Requests\Client\ClientUpdateRequest;
use App\Models\Client;
use App\Models\Utilities\Currency;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function index()
    {
        $clients = Client::latest()->get();

        return view('pages.client.index', compact('clients'));
    }

    public function create()
    {
        $devis = Currency::select(['id', 'name'])->get();

        return view('pages.client.create.index', compact('devis'));
    }

    public function store(ClientStoreRequest $request)
    {
        $data = $request->validated();

        $client = Client::create($data);

        if ($client) {

            if ($request->has('facturation_address') && $request->filled('facturation_address')) {
                $addressData = [
                    'address' => $request->facturation_address,
                    'postal' => $request->facturation_postal,
                    'city' => $request->facturation_city,
                    'country' => $request->facturation_country,
                    'type' => 'invoice'
                ];
                $client->invoiceAddress()->create($addressData);
            }
            if ($request->has('livraison_address') && $request->filled('livraison_address')) {
                $addressData = [
                    'address' => $request->livraison_address,
                    'postal' => $request->livraison_postal,
                    'city' => $request->livraison_city,
                    'country' => $request->livraison_country,
                    'type' => 'delivery'
                ];
                $client->deliveryAddress()->create($addressData);
            }
        }

        return redirect(route('app:clients.edit', $client->uuid))->with('success', "L'ajoute a éte effectuer avec success");
    }

    public function edit(Client $client)
    {
        //$this->authorize('update', $client);

        $devis = Currency::select(['id', 'name'])->get();

        $client->load('invoiceAddress', 'deliveryAddress');

        return view('pages.client.edit.index', compact('client', 'devis'));
    }

    public function update(ClientUpdateRequest $request, Client $client)
    {
        $data = $request->validated();

        $client->update($data);

        if ($client) {

            if ($request->has('facturation_address') && $request->filled('facturation_address')) {
                $addressData = [
                    'address' => $request->facturation_address,
                    'postal' => $request->facturation_postal,
                    'city' => $request->facturation_city,
                    'country' => $request->facturation_country,
                    'type' => 'invoice'
                ];
                $client->invoiceAddress()->updateOrCreate(['client_id' => $client->id, 'type' => 'invoice'], $addressData);
            }
            if ($request->has('livraison_address') && $request->filled('livraison_address')) {
                $addressData = [
                    'address' => $request->livraison_address,
                    'postal' => $request->livraison_postal,
                    'city' => $request->livraison_city,
                    'country' => $request->livraison_country,
                    'type' => 'delivery'
                ];
                $client->deliveryAddress()->updateOrCreate(['client_id' => $client->id, 'type' => 'delivery'], $addressData);
            }
        }

        return redirect(route('app:clients.edit', $client->uuid))->with('success', "L' Update a éte effectuer avec success");
    }

    public function view(Client $client)
    {
        $client->load('addresses');

        return view('pages.client.view.index', compact('client'));
    }

    public function delete(ClientDeleteRequest $request)
    {

        $client = Client::whereUuid($request->clientId)->first();

        //$this->authorize('delete', $client);

        if ($client) {

            $client->delete();

            return redirect(route('app:clients'))->with('success', 'Le client a été supprimer avec success');
        }

        return redirect()->back()->with('success', 'Problem ... !!');
    }
}
