<?php

use App\Http\Controllers\EtudiantController;
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



Route::get('etudiant/index', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/store', [EtudiantController::class, 'store']);
