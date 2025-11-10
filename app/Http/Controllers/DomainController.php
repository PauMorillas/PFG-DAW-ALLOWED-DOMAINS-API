<?php

namespace App\Http\Controllers;

use App\Models\AllowedDomain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function getDomains()
    {   
        // Obtener los dominios activos y unirlos en una cadena separada por espacios
       $domains = AllowedDomain::active()
        ->pluck('dominio')
        ->join(' ');
    
    return response($domains)
        ->header('Content-Type', 'text/plain');
    }

    public function saveDomain(Request $request)
    {
        // Lógica para guardar un dominio permitido
        return response()->json(['message' => 'Domain saved successfully!']);
    }
}
