<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   function GetUserPage(){
    return Inertia::render('Profile', [
        'user' => Auth::user()
    ]);
   }
}
