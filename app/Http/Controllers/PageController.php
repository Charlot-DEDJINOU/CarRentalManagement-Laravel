<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function acceuil() {
        return view('welcome');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register',['error' => false]);
    }

    public function cars() {
        return view('cars');
    }
}