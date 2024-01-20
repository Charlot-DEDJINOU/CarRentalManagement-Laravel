<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;

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
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/cars_create', [PageController::class, 'create_car'])->name('cars_create_page');

// Routes concernant le model User
Route::post('/register', [UserController::class ,'register'])->name('register');
Route::post('/login', [UserController::class ,'login'])->name('login');
Route::get('/logout', [UserController::class ,'logout'])->name('logout');
Route::get('/users', [UserController::class ,'users'])->name('users');

// Routes concernant le model Car
Route::get('/cars', [CarController::class, 'cars'])->name('cars');
Route::post('/cars_create', [CarController::class, 'create'])->name('cars_create');
Route::get('/cars_edit/{id}', [CarController::class, 'edit'])->name('cars_edit');
Route::put('/cars_update/{id}', [CarController::class, 'update'])->name('cars_update');
Route::delete('/cars_delete/{id}', [CarController::class, 'delete'])->name('cars_delete');

// Routes concernant le model Rental
Route::get('rentals', [RentalController::class , 'rentals'])->name('rentals');