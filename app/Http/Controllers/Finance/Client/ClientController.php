<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finance\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Utilities\Currency;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    public function index()
    {
        $clients = Client::all();

        return view('pages.client.index', compact('clients'));
    }

    public function create()
    {
        $devis = Currency::select(['id', 'name'])->get();
        
        return view('pages.client.create.index', compact('devis'));
    }
}
