<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function getDomains()
    {
        return response()->json(['message' => 'Allowed Domains API is working!']);
    }
}
