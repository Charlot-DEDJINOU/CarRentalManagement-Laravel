<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use App\Models\Rental;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function cars()
    {
        $cars = Car::all();

        return view('dashboard.cars', ['cars' => $cars]);
    }

    public function users()
    {
        $users = User::all();

        return view('dashboard.users', ['users' => $users]);
    }

    public function rentals()
    {
        $rentals = Rental::with('user', 'car')->get();

        return view('dashboard.rentals', ['rentals' => $rentals]);
    }
}
