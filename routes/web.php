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
    $comics_list = config("comics");
    return view('home', ["comics"=>$comics_list]);
});

Route::get('/comic/{id?}', function($id) {
    $comics_list = config("comics");
    $comic = $comics_list[$id];
    $comic["id"] = $id;
    return view('comic', ["comic"=>$comic]);
})->name("fumetto");


