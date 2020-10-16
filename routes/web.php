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


Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');
Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');



Route::group(['middleware' => ['auth', 'ceklevel:c']], function () {

    Route::get('/halaman-satu', 'App\Http\Controllers\BerandaController@halamansatu')->name('halaman-satu');
});
Route::group(['middleware' => ['auth', 'ceklevel:c,b']], function () {
    Route::get('/beranda', 'App\Http\Controllers\BerandaController@index');
    Route::get('/halaman-dua', 'App\Http\Controllers\BerandaController@halamandua')->name('halaman-dua');
});
Route::group(['middleware' => ['auth', 'ceklevel:c,b,a']], function () {
    Route::get('/beranda', 'App\Http\Controllers\BerandaController@index');
    Route::get('/halaman-tiga', 'App\Http\Controllers\BerandaController@halamantiga')->name('halaman-tiga');
});

Route::get('/registration', 'App\Http\Controllers\RegistrationController@registration')->name('registration');
Route::post('/registration', 'App\Http\Controllers\RegistrationController@postregistration')->name('postregistration');


Route::get('/auth/{provider}', 'App\Http\Controllers\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'App\Http\Controllers\SocialiteController@handleProviderCallback');