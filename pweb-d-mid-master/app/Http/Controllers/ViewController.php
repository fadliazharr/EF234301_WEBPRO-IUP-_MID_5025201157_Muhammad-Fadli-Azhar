<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($slug)
    {
        $kos = Kos::where('slug', $slug)->first();
        return view('view', [
            "title" => "$kos->name",
            "kos" => $kos
        ]);
    }
}
