<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;

Route::get('/',[PortfolioController::class,'home'])->name('home');
Route::get('/inner',[PortfolioController::class,'inner'])->name('inner');
Route::get('/details',[PortfolioController::class,'portfolioDetails'])->name('details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('admin');
    Route::get('/about', [AboutController::class,'about'])->name('about');
    Route::post('/store', [AboutController::class,'store'])->name('store');

});
