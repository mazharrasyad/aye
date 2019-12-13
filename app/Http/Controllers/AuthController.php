<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public function registernasabah()
    {
    	return view('authuser.registernasabah');
    }

     public function registnasabah(Request $data)
    {
        $tambahdata = ([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);
        User::create($tambahdata);
        return redirect('/');
    }

    public function registerinvestor()
    {
    	return view('authuser.registerinvestor');
    }

     public function registinvestor(Request $data)
    {
        $tambahdata = ([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);
        User::create($tambahdata);
        return redirect('/');
    
    }

}
