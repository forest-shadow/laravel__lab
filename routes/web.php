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

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/services', [
    'as'    => 'services',
    'uses'  => 'ServicesController@index'
]);

Route::get('/service/{service}', [
    'as'    => 'service.show',
    'uses'  => 'ServiceController@show'
]);

$router->get('/just-test', function () {
    echo Config::get('services.mailgun.secret');
    return "<h1>Just test closure returning statement</h1>";
})->name('just test');