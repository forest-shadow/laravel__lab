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

Route::get('/form-examples', function() {
    return view('pages.form-examples');
})->name('form examples');


Route::group(['prefix' => 'forms'], function () {

    Route::post('simple-form', [
        'as' => 'forms.simple-form',
        'uses' => 'FormsController@simpleForm'
    ]);

    Route::post('array-form', [
        'as' => 'forms.array-form',
        'uses' => 'FormsController@arrayForm'
    ]);

    Route::post('picture-upload', [
        'as' => 'forms.picture-upload',
        'uses' => 'FormsController@uploadPictureForm'
    ]);
});


$router->get('/just-test', function () {
    echo Config::get('services.mailgun.secret');
    return "<h1>Just test closure returning statement</h1>";
})->name('just test');

Route::get('/users/{id}/posts/{postId}', function($id, $postId) {
    echo $id . ' ' . $postId;
});

Route::get('/users/{id?}', function($id = null) {
    return $id;
});

Route::get('/landing/page', function() {
    return "landing page";
})->name('landing');

Route::get('/redirect', function() {
   return redirect()->route('landing');
});