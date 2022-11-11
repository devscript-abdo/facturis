<?php

use App\Http\Controllers\Commercial\Invoice\InvoiceController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[HomeController::class,'index'])->name('home');

Route::prefix('commercial')->group(function () {
    
});

Route::group(['prefix'=>'commercial'],function(){

    Route::group(['prefix'=>'invoices'],function(){

        Route::get('/',[InvoiceController::class,'index'])->name('invoices');
    
    });

});