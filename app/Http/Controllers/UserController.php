<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login (Request $request){
        $credenctials = $request->validate([
            'email' => 'required|email',
            'password'=> 'required',

]);
if (Auth::attempt($credenctials)){
    return redirect('/');
}

    }
}
