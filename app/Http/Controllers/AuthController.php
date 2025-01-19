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
        $ValidatedRequest = $request->validate([
            "first_name" => "required|string|max:50|min:5|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/",
            "last_name" => "required|string|max:50|min:5|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/",
            "phone"=>"required|regex:/^\+56\d{9}$/",
            'email' => 'required|email|unique:users,email|max:100',
            'password'=> 'required|max:50|min:5|regex:/^(?=.*[A-Z])(?=.*\d).+$/',
        ], [
            "first_name.required" => "El nombre es obligatorio.",
            "first_name.max" => "El nombre no puede tener más de 50 caracteres.",
            "first_name.min" => "El nombre debe tener al menos 5 caracteres.",
            "last_name.required" => "El apellido es obligatorio.",
            "last_name.max" => "El apellido no puede tener más de 50 caracteres.",
            "last_name.min" => "El apellido debe tener al menos 5 caracteres.",
            "phone.required" => "El número de teléfono es obligatorio.",
            "phone.regex" => "El formato del número de teléfono debe ser +56 seguido de 9 dígitos.",
            "email.required" => "El correo electrónico es obligatorio.",
            "email.email" => "El correo electrónico debe ser válido.",
            "email.unique" => "El correo electrónico ya está registrado.",
            "password.required" => "La contraseña es obligatoria.",
            "password.max" => "La contraseña no puede tener más de 50 caracteres.",
            "password.min" => "La contraseña debe tener al menos 5 caracteres.",
            "password.regex" => "La contraseña debe contener al menos una letra minúscula, una letra mayúscula, un número y un carácter especial.",
        ]);


        $user = User::create([
            'first_name' => $ValidatedRequest['first_name'],
            'last_name' => $ValidatedRequest['last_name'],
            'email' => $ValidatedRequest['email'],
            'phone' => $ValidatedRequest['phone'],
            'password' => Hash::make($ValidatedRequest['password']),
        ]);

        return response()->json(["message"=> "¡Usuario registado con éxito!"], 201);
    }

    function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            "email.required" => "El correo electrónico es obligatorio.",
            "password.required" => "La contraseña es obligatoria."
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
    session()->invalidate();
    session()->regenerateToken();

    return Inertia::render('Login');
    }
}
