<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function Cars()
    {
        $cars = Car::all(); // Récupère tous les voitures

        return view('cars', ['cars' => $cars]); // Envoie les cars à la vue
    }

    public function detail($id) 
    {
        $car = Car::find($id);
        $rentals = $car->rentals()->where('status', '!=', 3)->get();
    
        return view('detailCars', compact('car', 'rentals'));
    }
    

    public function create(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|numeric',
            'images' => 'required|string',
            'availability' => 'required|in:0,1',
            'registration_number' => 'required|string',
            'description' => 'nullable|string',
        ]);

        Car::create($request->all());

        return redirect()->route('dashboard.cars')->with('success', 'Voiture ajoutée avec succès!');
    }

    public function edit($id)
    {
        $car = Car::find($id);

        return view('dashboard.editCar', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);

        $car->update($request->all());

        return redirect()->route('dashboard.cars')->with('success', 'Voiture mise à jour avec succès!');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('dashboard.cars')->with('success', 'Voiture supprimée avec succès!');
    }

    public function acceuil() 
    {
        $cars = Car::take(4)->get();
    
        return view('welcome', ['cars' => $cars]);
    }
}
