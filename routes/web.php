<?php

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
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('products', function () {
    return view('pages.products');
})->name('products');

Route::get('services', function () {
    return view('pages.services');
})->name('services');

$router->get('/just-test', function () {
   return "<h1>Just test closure returning statement</h1>";
})->name('just test');