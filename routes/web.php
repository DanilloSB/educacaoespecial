<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');

Route::get('/quemsomos', function () {
    return view('site.whoweare');
})->name('site.whoweare');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

Route::get('/registration', function () {
    return view('site.registration');
})->name('site.registration');

Route::get('/usuario_insere_e_lista', function () {
    $u = new User;
    $u->name = 'Heitor';
    $timestamp = date("Y-m-d-h-i-sa");
    $u->email = 'heitor@hotmail.com'. $timestamp;
    $u->password = '123';
    $u->save();
    return User::all();
});
