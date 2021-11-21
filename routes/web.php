<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ContatosController;
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

Route::get('/aulas', function () {
    return view('site.aulas');
})->name('site.aulas');

Route::get('/registration/novo', [UsuarioController::class, 'create']);
Route::post('/registration/novo', [UsuarioController::class, 'store'])->name('registrar_usuario');

Route::get('/contact/novo', [ContatosController::class, 'create']);
Route::post('/contact/novo', [ContatosController::class, 'store'])->name('registrar_contato');
