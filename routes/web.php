<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

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

// routes/web.php

// Routes pour les pages statiques gérées par PageController
Route::get('/', [PageController::class, 'acceuil'])->name('acceuil');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/cars', [PageController::class, 'cars'])->name('cars');
Route::get('/register', [PageController::class, 'register'])->name('register_page');
Route::get('/login', [PageController::class, 'login'])->name('login_page');
Route::post('/register', [UserController::class ,'resgiter'])->name('register');
Route::post('/login', [UserController::class ,'login'])->name('login');
Route::get('/logout', [UserController::class ,'logout'])->name('logout');