<?php

namespace App\Http\Controllers\Commercial\Invoice;

use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    //

    public function index()
    {
        return view('pages.invoice.index');
    }

    public function create()
    {
        return view('pages.invoice.create.index');
    }
}
