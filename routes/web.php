<?php

use App\Http\Controllers\DomainController;
use App\Http\Middleware\CheckApiToken;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/allowed-domains', [DomainController::class, 'getDomains'])->middleware(CheckApiToken::class);

Route::post('/api/save-domain', [DomainController::class, 'saveDomain'])->middleware(CheckApiToken::class);