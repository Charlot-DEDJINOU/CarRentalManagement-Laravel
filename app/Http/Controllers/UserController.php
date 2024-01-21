<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        
        if ($validator->fails()) {
            return view('register', [
                'error' => true,
                'nameError' => $validator->errors()->first('name'),
                'emailError' => $validator->errors()->first('email'),
                'passwordError' => $validator->errors()->first('password'),
            ]);
        }        

        // Création d'un nouvel utilisateur dans la base de données
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('page.login')->with('success', 'Inscription réussie ! Connectez-vous maintenant.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('car.acceuil')->with('success', 'Connexion réussie.');
        }

        return redirect()->route('page.login')->with('error', 'E-mail ou mot de passe incorrect.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('car.acceuil')->with('success', 'Vous avez été déconnecté.');
    }

    public function users()
    {
        $users = User::all(); // Récupère tous les utilisateurs

        return view('dashboard.users', ['users' => $users]); // Envoie les utilisateurs à la vue
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->update(['role' => 'admin']);

        return redirect()->route('dashboard.users')->with('success', 'Utilisateur nommé administrateur avec succès!');
    }

    public function removeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->update(['role' => 'user']);

        return redirect()->route('dashboard.users')->with('success', 'Dénomination de l\'administrateur réussie!');
    }

    public function rentals($id)
    {
        $user = User::with('rentals.car')->find($id);

        $rentals = $user->rentals;

        return view('rentals' , ['rentals' => $rentals]);
    }
}
