<?php

use App\Http\Controllers\dashboardcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;

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

Route::get('/', function () {
    return view ('Home',[
        "tittle" => "Home"
    ]);
});

Route::get('/item', function () {
    return view ('item',[
        "tittle" => "Powertools"
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->Middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']); 

Route::get('/register', [RegisterController::class, 'index'])->Middleware('guest'); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');