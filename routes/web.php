<?php

use App\Http\Controllers\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [Category::class, 'food_beverage']);
    Route::get('/beauty-health', [Category::class, 'beauty_health']);
    Route::get('/home-care', [Category::class, 'home_care']);
    Route::get('/baby-kid', [Category::class, 'baby_kid']);
});

Route::get('/user/{id}/name/{name}', function ($id=0, $name='Udin') {
    // return "<h1>Ini adalah user dengan Id: $id <br> Bernama: $name</h1>";
    return view('user')
    ->with('id', $id)
    ->with('name', $name);
});
