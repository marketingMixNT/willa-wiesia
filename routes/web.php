<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/', [MainController::class, 'index'])->name('home.index');
    Route::post('/', [MainController::class, 'index'])->name('home.form');
    Route::get(LaravelLocalization::transRoute('routes.privacy-policy'), [MainController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get(LaravelLocalization::transRoute('routes.regulations'), [MainController::class, 'regulations'])->name('regulations');
});
