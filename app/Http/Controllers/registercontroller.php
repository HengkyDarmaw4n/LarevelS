<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\facades\Hash;

class registercontroller extends Controller
{
    public function index()
    {
        return view ('register.index',[
            'tittle' => 'Register'
         ]);

    }

    public function store(Request $request)
    {
      $validatedata = $request->validate([
           'name' => 'required|max:255',
           'username'=> 'required|min:5|max:255|unique:users',
           'email' => 'required|email:dns|unique:users', 
           'password' => 'required|min:5|max:255'
       ]);

       // $validatedata['password'] = bcrypt($validatedata['password']);
      $validatedata['password'] = Hash::make($validatedata['password']);

       User::create($validatedata);
       
     //  $request->session()->flash('success', 'Register success! Please login');

       return redirect('/login')->with('success', 'Register success! Please login');
    }
}