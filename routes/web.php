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

    $comics = config('comics');

    return view('partials.main', ["comics" => $comics]);
});

Route::get('/comics/{id}', function($id) {

    $comics = config('comics');

    abort_if( !isset($comics[$id]), 404);

    $product = $comics[$id];

    return view('partials.product', ['product' => $product]);

})->where('id','[0-9]+')->name('comics');
