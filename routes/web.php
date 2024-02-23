<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\UserController;
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


Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::view('/register', 'auth.regis');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index']);

    Route::get('/logout', [AuthController::class, 'signout']);
    Route::post('/logout', [AuthController::class, 'signout']);
    
    Route::controller(FotoController::class)->group(function(){
        Route::get('/profile','index');
        Route::get('/newImage','create');
        Route::post('/upload','store');
        Route::get('/edit/{fotoId}/{username}','edit');
        Route::post('/edit/{fotoId}','update');
        Route::post('/delete/{fotoId}','destroy');

        Route::get('/detail/{fotoId}','show');
    });

    Route::controller(AlbumController::class)->group(function(){
        Route::get('/album','index');
        Route::get('/albums/new','create');
    });

});