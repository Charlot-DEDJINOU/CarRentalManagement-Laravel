<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/inscription', [PageController::class, 'register'])->name('register');
Route::get('/connexion', [PageController::class, 'login'])->name('login');

