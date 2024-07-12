<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [MainController::class, 'index'])->name('home.index');
    Route::post('/', [MainController::class, 'index'])->name('home.form');
    Route::get('/polityka-prywatnosci', [MainController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::get('/regulamin', [MainController::class, 'regulations'])->name('regulations');
});
