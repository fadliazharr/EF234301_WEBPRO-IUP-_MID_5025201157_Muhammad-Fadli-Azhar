<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index() 
    {
        $kos = Kos::all();
        // dd($kos);
        return view('catalog', [
            "title" => "Catalog",
            "kos" => $kos
        ]);

    }
}
