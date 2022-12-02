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

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Models\User;

Route::get('/', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);

// Rotas de autenticação
//User (ADM)
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/logar', [UserController::class, 'logar'])->name('usuarios.logar');
//Cliente
Route::get('/cliente/login', [ClienteController::class, 'login'])->name('login');
Route::post('/cliente/logar', [ClienteController::class, 'logar'])->name('clientes.logar');


// Route::get('/login', function () {
//     return view('index');
// });

Route::get('/admin', function () {
    return view('adm.HomeAdm');
});

Route::get('/cadastro', function () {
    return view('empresa.formcadastro');
});

Route::middleware(('admin'))->group(function(){

    Route::get('admin', function(){
        dd('Você é um admin');
    });

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
});

Route::middleware(('client'))->group(function(){

    Route::get('client', function(){
        dd('Você é um client');
    });
});

Route::middleware(('empresa'))->group(function(){

    Route::get('empresa', function(){
        dd('Você é uma empresa');
    });
});


