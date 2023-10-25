<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register', [
            "title" => "Register"]
        );
    }

    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required|max:50',
            'username' => 'required|max:15',
            'email' => 'required|email|max:64',
            'password' => 'required|max:32|min:8|confirmed'
        ]);

        // Store User
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        // Sign the user in
        auth()->attempt($request->only('email', 'password'));

        // Redirect
        return redirect()->route('home');
    }
}
