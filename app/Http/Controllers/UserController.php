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

        return redirect()->route('login_page')->with('success', 'Inscription réussie ! Connectez-vous maintenant.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('acceuil')->with('success', 'Connexion réussie.');
        }

        return redirect()->route('login_page')->with('error', 'E-mail ou mot de passe incorrect.');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('acceuil')->with('success', 'Vous avez été déconnecté.');
    }
}
