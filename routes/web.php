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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CandidatoController;
use App\Models\User;


Route::get('/vagas/painel', [HomeController::class, 'painelVagas']);
Route::get('/usuario/{id}', [UserController::class, 'show']);

// Rotas de autenticação
//User (ADM)
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/logar', [UserController::class, 'logar'])->name('usuarios.logar');

Route::get('/', function () {
    return view('homepage');
});

Route::get('/cadastro', function () {
    return view('empresa.create');
});

//ROTAS DO ADMINISTRADOR
Route::middleware(('admin'))->group(function(){
    
    Route::get('admin', function(){
        dd('Você é um admin');
    });

    //Gerenciador de Empresas
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ])->group(function () {
        Route::get('/dashboard', [UserController::class, 'dashboard']);
        Route::get('/dashboard/list/empresas', [UserController::class, 'listEmpresas']);
        Route::get('/dashboard/list/candidatos', [UserController::class, 'listCandidatos']);
        Route::delete('/dashboard/empresas/{id}', [UserController::class, 'destroy']);
    });
    
});

//ROTAS DO CANDIDATO
Route::middleware(('client'))->group(function(){
    Route::get('/candidatos/create', [ClienteController::class, 'create']);
    Route::get('/candidatos/dashboard', [CandidatoController::class, 'dashboard']);
    Route::get('client', function(){
        dd('Você é um client');
    });

    Route::get('/candidatos/create', [CandidatoController::class, 'create']);
    Route::post('/candidatos', [CandidatoController::class, 'store']);
    Route::get('/candidatos/edit', [CandidatoController::class, 'edit']);
    Route::put('/candidatos/update/{id}', [CandidatoController::class, 'update']);

    Route::post('/vagas/join/{id}', [VagaController::class, 'joinVaga']);
    Route::get('/vagas/pivo/{id}', [CandidatoController::class, 'updatePivo']);
});

//ROTAS DA EMPRESA
Route::middleware(('empresa'))->group(function(){
    Route::get('empresa', function(){
        dd('Você é uma empresa');
    });
    Route::get('/empresas/dashboard', [EmpresaController::class, 'dashboard']);
    Route::get('/empresas/create', [EmpresaController::class, 'create']);
    Route::post('/empresas', [EmpresaController::class, 'store']);
    Route::get('/empresas/edit', [EmpresaController::class, 'edit']);
    Route::put('/empresas/update/{id}', [EmpresaController::class, 'update']);

    //Gerenciamento de candidatos
    Route::get('/vagas/create', [VagaController::class, 'create']);
    Route::post('/vagas', [VagaController::class, 'store']);
    Route::delete('/vagas/{id}', [VagaController::class, 'destroy']);
    Route::get('/vagas/edit/{id}', [VagaController::class, 'edit']);
    Route::put('/vagas/update/{id}', [VagaController::class, 'update']);
    Route::get('/vagas/list/candidatos/{id}', [VagaController::class, 'listCandidatos']);
    Route::get('/vagas/candidato/{id}/{vaga}', [VagaController::class, 'verCandidato']);

    //setando status da inscrição
    Route::get('/inscricao/efetuar/{candidato}/{vaga}', [VagaController::class, 'mudarStatusInscricaoEfetuar']);
    Route::get('/inscricao/finalizar/{candidato}/{vaga}', [VagaController::class, 'mudarStatusInscricaoFinalizar']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
