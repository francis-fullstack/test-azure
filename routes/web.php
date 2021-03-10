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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


        /* Route::get('/login', 'JamesMachouk\azureAdAuth\AzureAdAuthController@signin')->name('login');
        Route::get('/register', 'JamesMachouk\azureAdAuth\AzureAdAuthController@signin');
        Route::get('/callback', 'JamesMachouk\azureAdAuth\AzureAdAuthController@azureCallback');
        Route::namespace('App\Http\Controllers')->group(function () {
            Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
        });
        Route::get('/adLogout','JamesMachouk\azureAdAuth\AzureAdAuthController@adLogout')->name('adLogout'); */
