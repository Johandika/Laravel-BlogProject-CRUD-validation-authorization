<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register.index",[
            "titles" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "username" => "required|min:3|max:255|unique:users",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:5|max:255"
        ]);

        // Passwwordnya di Hashing dulu dengan cara laravel
        $validatedData["password"]=Hash::make($validatedData["password"]);
        // opsi lain
        // $validatedData["password"]=bcrypt($validatedData["password"]);

        User::create($validatedData);
        
        // $request->session()->flash("success","Registration Successfull! Please Login");

        return redirect("/login")->with("success","Registration Successfull! Please Login");
    }
}
