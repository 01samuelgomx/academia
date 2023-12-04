<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\SobreController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

//--------------------------------------------------------------------------
// Web Routes
//--------------------------------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('contato', [ContatoController::class, 'index'])->name('contato');
Route::get('servico', [ServicoController::class, 'index'])->name('servico');
Route::get('sobre',[SobreController::class, 'index'])->name('sobre');
Route::get('orcamento', [OrcamentoController::class, 'index'])->name('orcamento');
Route::get('modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
//--------------------------------------------------------------------------
// Modalidades
//--------------------------------------------------------------------------
Route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
Route::get('/modalidade/aerobica', [ModalidadeController::class, 'aerobica'])->name('modalidade.aerobica');
Route::get('/modalidade/pilates', [ModalidadeController::class, 'pilates'])->name('modalidade.pilates');
Route::get('/modalidade/yoga', [ModalidadeController::class, 'yoga'])->name('modalidade.yoga');


