<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index($id=0, $name='Udin') {
        // return "<h1>Ini adalah user dengan Id: $id <br> Bernama: $name</h1>";
        return view('user')
        ->with('id', $id)
        ->with('name', $name);
    }
}
