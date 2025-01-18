<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    function register(Request $request){
        $request = $request->validate([
            "first_name" => "string|max:50|min:5",
            "last_name" => "string|max:50|min:5",
            "phone"=>"regex:/^\+56\d{9}$/",
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|max:50|min:5',
        ]);

        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);

        return response()->json([], 201);
    }

    function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([], 200);
        }

        throw ValidationException::withMessages([
            'email' => ['Las credenciales proporcionadas no coinciden con nuestros registros.']
        ]);
    }

    function logout(){

        Auth::logout();

        Inertia::render('login');
    }
}
