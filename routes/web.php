<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = config("pasta");
    $paste = [];
    foreach ($data as $key => $prodotto) {
        $prodotto["id"] = $key;
        $paste[$prodotto["tipo"]][] = $prodotto; 
    }
    return view('index', ["paste" => $paste]);
})->name("Home");

Route::get('/prodotti', function () {
    return redirect()->route('Home');
})->name("Prodotti");

Route::get('/product/show/{id}', function ($id) {
    $prodotto = config("pasta.$id");
    return view('product', ["product" => $prodotto]);
})->name("Show");

Route::get('/news', function () {
    return view('news');
})->name("News");