<?php

use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\CestaController;
use App\Http\Controllers\CestaFamiliaController;
use App\Http\Controllers\ColaboradoresController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/autenticar', [LoginController::class, 'autenticar'])->name('autenticar');

Route::middleware(['auth', 'auth.session'])->group(function () {

    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios');
    Route::post('/usuarios', [UserController::class, 'save']);
    Route::get('/usuarios/create', [UserController::class, 'create'])->name('create_usuarios');
    Route::get('/usuarios/{user_id}/edit', [UserController::class, 'edit'])->name('edit_usuarios');
    Route::delete('/usuarios/destroy/{user_id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
    Route::put('/usuarios/{user_id}', [UserController::class, 'update']);;



    Route::get('/colaborador', [ColaboradoresController::class, 'index'])->name('colaborador');
    Route::post('/colaborador', [ColaboradoresController::class, 'save']);
    Route::get('/colaborador/create', [ColaboradoresController::class, 'create'])->name('create_colaborador');
    Route::get('/colaborador/{colaborador_id}/edit', [ColaboradoresController::class, 'edit'])->name('edit_colaborador');
    Route::delete('/colaborador/destroy/{colaborador_id}', [ColaboradoresController::class, 'destroy'])->name('colaborador.destroy');
    Route::put('/colaborador/{colaborador_id}', [ColaboradoresController::class, 'update']);

    Route::get('/familia', [FamiliaController::class, 'index'])->name('familia');
    Route::post('/familia', [FamiliaController::class, 'save']);
    Route::get('/familia/create', [FamiliaController::class, 'create'])->name('create_familia');
    Route::get('/familia/{colaborador_id}/edit', [FamiliaController::class, 'edit'])->name('edit_familia');
    Route::delete('/familia/destroy/{familia_id}', [FamiliaController::class, 'destroy'])->name('familia.destroy');
    Route::put('/familia/{familia_id}', [FamiliaController::class, 'update']);

    Route::get('/familia/{familia_id}/membro', [MembroController::class, 'index'])->name('membro');
    Route::get('/familia/{familia_id}/membro/create', [MembroController::class, 'create'])->name('create_membro');
    Route::post('/familia/{familia_id}/membro', [MembroController::class, 'save'])->name('create_membro');
    Route::delete('/familia/destroy/{familia_id}/membro', [FamiliaController::class, 'destroy'])->name('membro.destroy');

    Route::get('/familia/{familia_id}/cesta', [CestaFamiliaController::class, 'index'])->name('cestafamilia');
    Route::get('/familia/{familia_id}/cesta/create', [CestaFamiliaController::class, 'create'])->name('create_cestafamilia');
    Route::post('/familia/{familia_id}/cesta', [CestaFamiliaController::class, 'save'])->name('create_cestafamilia');
    Route::delete('/familia/destroy/{familia_id}/cesta', [CestaFamiliaController::class, 'destroy'])->name('cestafamilia.destroy');

    Route::get('/cesta', [CestaController::class, 'index'])->name('cesta');
    Route::post('/cesta', [CestaController::class, 'save']);
    Route::get('/cesta/create', [CestaController::class, 'create'])->name('create_cesta');
    Route::get('/cesta/{colaborador_id}/edit', [CestaController::class, 'edit'])->name('edit_cesta');
    Route::delete('/cesta/destroy/{cesta_id}', [CestaController::class, 'destroy'])->name('cesta.destroy');
    Route::put('/cesta/{cesta_id}', [CestaController::class, 'update']);
    Route::get('/familia/{familia_id}/cestas', [FamiliaController::class, 'cesta'])->name('cesta_familia');

    Route::get('/alimento', [AlimentoController::class, 'index'])->name('alimento');
    Route::post('/alimento', [AlimentoController::class, 'save']);
    Route::get('/alimento/create', [AlimentoController::class, 'create'])->name('create_alimento');
    Route::get('/alimento/{colaborador_id}/edit', [AlimentoController::class, 'edit'])->name('edit_alimento');
    Route::delete('/alimento/destroy/{alimento_id}', [AlimentoController::class, 'destroy'])->name('alimento.destroy');
    Route::put('/alimento/{alimento_id}', [AlimentoController::class, 'update']);

});
