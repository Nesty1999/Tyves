<?php
namespace App\Http\Controllers;
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

Route::get('/ajouter/client',[ClientController::class,'index']);
Route::get('/liste/client',[ClientController::class,'liste'])->name('liste.client');
Route::post('/enregistrer/client',[ClientController::class,'store'])->name('store.client');
Route::get('/supprimer-client/{id}',[ClientController::class,'destroy'])->name('delate-client');
Route::get('/editer-client/{id}',[ClientController::class,'edit'])->name('edit-client');
Route::post('/modifier/client/{id}',[ClientController::class,'update'])->name('update.client');

Route::get('/ajouter/fournisseur',[FournisseurController::class,'index']);
Route::get('/liste/fournisseur',[FournisseurController::class,'liste'])->name('liste.fournisseur');
Route::post('/enregistrer/fournisseur',[FournisseurController::class,'store'])->name('store.fournisseur');
Route::get('/supprimer-fournisseur/{id}',[FournisseurController::class,'destroy'])->name('delate-fournisseur');
Route::get('/editer-fournisseur/{id}',[FournisseurController::class,'edit'])->name('edit-fournisseur');
Route::post('/modifier/fournisseur/{id}',[FournisseurController::class,'update'])->name('update.fournisseur');
