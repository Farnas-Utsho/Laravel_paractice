<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_controller extends Controller
{
    public function adduser(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'pass' => 'required|min:8',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required|string',


        ]);

        return $req->all();
    }
}
