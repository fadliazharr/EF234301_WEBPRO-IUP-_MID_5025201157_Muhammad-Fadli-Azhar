<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $kos = Kos::all();
        return view('dashboard.index', [
            "title" => "Dashboard",
            "kos" => $kos
        ]);
    }

    public function add()
    {
        return view('dashboard.add', [
            "title" => "Tambah Kos",
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'slug' => 'required|unique:kos,slug|max:200',
            'description' => 'max:500',
            'price' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'address' => 'required',
            'maps' => 'required',
        ]);

        // Store Kos
        $kos = Kos::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'price' => $request->price,
            'phone' => $request->phone,
            'image' => $request->image,
            'address' => $request->address,
            'maps' => $request->maps,   
        ]);

        return redirect()->route('dashboard');

    }

    public function edit($id)
    {
        $kos = Kos::findOrFail($id);
        return view('dashboard.edit', [
            "title" => "Edit Kos",
            "kos" => $kos,
        ]);

    }

    public function update($id, Request $request)
    {
        $kos = Kos::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|max:100',
            'slug' => 'required|unique:kos,slug|max:200',
            'description' => 'max:500',
            'price' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'address' => 'required',
            'maps' => 'required',
        ]);

        $kos->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'price' => $request->price,
            'phone' => $request->phone,
            'image' => $request->image,
            'address' => $request->address,
            'maps' => $request->maps,   
        ]);

        return redirect()->route('dashboard');
    }

    public function destroy($id) {
        $kos = Kos::findOrFail($id);
        $kos->delete();     

        return redirect()->route('dashboard');
    }
}
