<?php

use App\Http\Controllers\DomainController;
use App\Http\Middleware\CheckApiToken;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Aplicamos el middleware de autenticación (CheckApiToken) a todas las rutas de dominio.
Route::middleware([CheckApiToken::class])->group(function () {
    
    // RUTA GET (Consumo por Spring Boot para obtener la lista de dominios)
    Route::get('api/allowed-domains', [DomainController::class, 'getDomains']);

    // RUTA POST (Uso administrativo para añadir nuevos dominios)
    Route::post('api/save-domain', [DomainController::class, 'saveDomain']);
});