<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Seller extends Controller
{
    public function index() {
        return view('seller');
    }
}
