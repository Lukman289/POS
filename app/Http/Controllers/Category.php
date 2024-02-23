<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function food_beverage() {
        return view('product')
        ->with('category', 'Food-Beverage')
        ->with('product', 'Chicken Smackdown');
    }
    public function beauty_health() {
        return view('product')
        ->with('category', 'Beauty-Health')
        ->with('product', 'Skin Moisturizer');
    }
    public function home_care() {
        return view('product')
        ->with('category', 'Home-Care')
        ->with('product', 'Soap');
    }
    public function baby_kid() {
        return view('product')
        ->with('category', 'Baby-Kid')
        ->with('product', 'Airplane Toy');
    }
}
