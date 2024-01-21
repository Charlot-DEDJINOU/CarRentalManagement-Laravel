<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\DashboardController;

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
Route::middleware([\App\Http\Middleware\AuthMiddleware::class])->group(function () {
    // Les routes qui nécessitent l'authentification vont ici
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashbord/cars', [DashboardController::class, 'cars'])->name('dashboard.cars');
    Route::get('/dashboard/cars/create', [PageController::class, 'createCar'])->name('page.createCar');
    Route::post('/dashboard/cars/create', [CarController::class, 'create'])->name('cars.create');
    Route::get('/dashboard/cars/edit/{id}',[CarController::class, 'edit'])->name('cars.edit');
    Route::put('/dashboard/cars/update/{id}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/dashboard/cars/delete/{id}', [CarController::class, 'destroy'])->name('cars.delete');
    Route::get('/dashboard/users', [DashboardController::class ,'users'])->name('dashboard.users');
    Route::put('/dashboard/users/role/admin/{id}', [UserController::class ,'makeAdmin'])->name('user.makeAdmin');
    Route::put('/dashboard/users/role/user/{id}', [UserController::class ,'removeAdmin'])->name('user.removeAdmin');
    Route::get('/dashboard/rentals', [DashboardController::class , 'rentals'])->name('dashboard.rentals');
    Route::put('/dashboard/rental/status/{status}/{id}', [RentalController::class, 'status'])->name('rental.status');
    Route::delete('/dashboard/rental/delete/{id}', [RentalController::class, 'destroy'])->name('rental.delete');
    Route::get('/logout', [UserController::class ,'logout'])->name('user.logout');

    Route::get('/users/rentals/{id}', [UserController::class , 'rentals'])->name('users.rentals');
    Route::post('/rentals/create/{carId}', [RentalController::class , 'create'])->name('rental.create');
});

// Les autres routes ici (qui ne nécessitent pas d'authentification)

Route::get('/', [CarController::class, 'acceuil'])->name('car.acceuil');
Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
Route::get('/cars', [CarController::class, 'cars'])->name('car.cars');
Route::get('/register', [PageController::class, 'register'])->name('page.register');
Route::get('/login', [PageController::class, 'login'])->name('page.login');
Route::post('/register', [UserController::class ,'register'])->name('user.register');
Route::post('/login', [UserController::class ,'login'])->name('user.login');
Route::get('/cars/detail/{id}', [CarController::class, 'detail'])->name('cars.detail');