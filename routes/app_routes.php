<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'profile'], function () {

    Route::get('/', [ProfileController::class, 'index'])->name('profile');
});
