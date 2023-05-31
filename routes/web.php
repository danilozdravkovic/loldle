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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name("home");
Route::get('/loginForm',[\App\Http\Controllers\UserController::class,'loginForm'])->name("loginForm");
Route::get('/registerForm',[\App\Http\Controllers\UserController::class,'registerForm'])->name("registerForm");
Route::post('/registerForm',[\App\Http\Controllers\UserController::class,'registerValidation'])->name("registerValidation");
Route::post('/loginForm',[\App\Http\Controllers\UserController::class,'performLogin'])->name("performLogin");
Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');
Route::get('/aboutAuthor',[\App\Http\Controllers\HomeController::class,'aboutAuthor'])->name('aboutAuthor');

Route::middleware(['admin'])->group(function () {
    Route::get('/champions',[\App\Http\Controllers\AdminController::class,'index'])->name('champions');
    Route::post('/champion',[\App\Http\Controllers\ChampionController::class,'validateChamp'])->name('addChampion');
    Route::delete('/champion/delete/{id}',[\App\Http\Controllers\ChampionController::class,'deleteChamp'])->name('deleteChampion');
    Route::get('/champion/show/{id}',[\App\Http\Controllers\ChampionController::class,'showChamp'])->name('showChampion');
    Route::patch('/champion/update',[\App\Http\Controllers\ChampionController::class,'updateChamp'])->name('updateChampion');

    Route::get('/users',[\App\Http\Controllers\AdminController::class,'indexUsers'])->name('users');
    Route::patch('/user',[\App\Http\Controllers\UserController::class,'validateUser'])->name('addUser');

    Route::get('/activityLog',[\App\Http\Controllers\AdminController::class,'activityLog'])->name('activityLog');

});
Route::middleware(['user'])->group(function () {
    Route::get('/classic',[\App\Http\Controllers\HomeController::class,'classic'])->name('classic');
    Route::get('/quote',[\App\Http\Controllers\HomeController::class,'quote'])->name('quote');
    Route::get('/getChampions',[\App\Http\Controllers\ChampionController::class,'getChampions'])->name('getChampions');
});

