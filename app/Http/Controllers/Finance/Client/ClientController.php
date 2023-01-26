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
        $clients = Client::simplePaginate(10);

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

        return redirect(route('finance:sells:clients.edit', $client->uuid))->with('success', "L'ajoute a éte effectuer avec success");
    }

    public function edit(Client $client)
    {
        //$this->authorize('update', $client);

        $client->load('telephones', 'emails');

        return view('pages.client.edit.index', compact('client'));
    }

    public function update(ClientUpdateRequest $request, Client $client)
    {
        $data = $request->validated();

        $client->update($data);

        return redirect(route('finance:sells:clients.edit', $client->uuid))->with('success', "L' Update a éte effectuer avec success");
    }

    public function delete(ClientDeleteRequest $request)
    {

        $client = Client::whereUuid($request->clientId)->first();

        //$this->authorize('delete', $client);

        if ($client) {

            $client->delete();

            return redirect(route('finance:sells:clients'))->with('success', 'Le client a été supprimer avec success');
        }

        return redirect()->back()->with('success', 'Problem ... !!');
    }
}
