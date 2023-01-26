<?php

use App\Http\Controllers\Finance\Buy\Provider\ProviderController;
use App\Http\Controllers\Finance\Client\ClientController;
use App\Http\Controllers\Finance\Sell\Bl\BlController;
use App\Http\Controllers\Finance\Sell\Estimate\EstimateController;
use App\Http\Controllers\Finance\Sell\Invoice\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'sells'], function () {

    Route::group(['prefix' => 'invoices'], function () {
        Route::get('/', [InvoiceController::class, 'index'])->name('invoices');
        Route::get('/create', [InvoiceController::class, 'create'])->name('invoices.create');
        Route::post('/create', [InvoiceController::class, 'store'])->name('invoices.store');
    });

    Route::group(['prefix' => 'estimates'], function () {
        Route::get('/', [EstimateController::class, 'index'])->name('estimates');
        Route::get('/create', [EstimateController::class, 'create'])->name('estimates.create');
        Route::post('/create', [EstimateController::class, 'store'])->name('estimates.store');

        Route::group(['prefix' => 'estimate'], function () {
            Route::get('/{estimate}', [EstimateController::class, 'edit'])->name('estimates.edit');
            Route::post('/{estimate}', [EstimateController::class, 'update'])->name('estimates.update');
            Route::delete('/{estimate}', [EstimateController::class, 'delete'])->name('estimates.delete');
        });
    });

    Route::group(['prefix' => 'bons-de-livraison'], function () {
        Route::get('/', [BlController::class, 'index'])->name('bl');
        Route::get('/create', [BlController::class, 'create'])->name('bl.create');
        Route::post('/create', [BlController::class, 'store'])->name('bl.store');
    });

    Route::group(['prefix' => 'clients'], function () {

        Route::get('/', [ClientController::class, 'index'])->name('clients');
        Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
        Route::post('/create', [ClientController::class, 'store'])->name('clients.store');

        Route::group(['prefix' => 'client'], function () {
            Route::get('/{client}', [ClientController::class, 'edit'])->name('clients.edit');
            Route::post('/{client}', [ClientController::class, 'update'])->name('clients.update');
            Route::delete('/{client}', [ClientController::class, 'delete'])->name('clients.delete');
        });
    });
});

Route::group(['prefix' => 'buys'], function () {

    Route::group(['prefix' => 'suppliers'], function () {

        Route::get('/', [ProviderController::class, 'index'])->name('providers');
        Route::get('/create', [ProviderController::class, 'create'])->name('providers.create');
        Route::post('/create', [ProviderController::class, 'store'])->name('providers.store');

        Route::group(['prefix' => 'provider'], function () {
            Route::get('/{provider}', [ProviderController::class, 'edit'])->name('providers.edit');
            Route::post('/{provider}', [ProviderController::class, 'update'])->name('providers.update');
            Route::delete('/{provider}', [ProviderController::class, 'delete'])->name('providers.delete');
        });
    });
});
