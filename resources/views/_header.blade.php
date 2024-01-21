<!DOCTYPE html>
<html ang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}" />
    <title>Car Rental Management</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-success fixed-top header">
  <div class="container-fluid">
      <a class="navbar-brand mx-3 fs-5 text-white fw-medium" href="#">Car Rental Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"></div>
      <div class="collapse navbar-collapse"></div>
      <div class="collapse navbar-collapse"></div>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active fs-5 text-white fw-light mx-3" href="{{ route('car.acceuil') }}">Accueil</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('car.cars') }}">Nos voitures</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('page.contact') }}">Contact</a>
              </li>
              
              <!-- Onglets pour un utilisateur connecté -->
              @auth
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('users.rentals' , ['id' => Auth::user()->id ]) }}">Mes Locations</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('user.logout') }}">Déconnexion</a>
                  </li>
              @endauth
              
              <!-- Onglets pour un administrateur -->
              @if(Auth::user() && Auth::user()->role === 'admin')
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('dashboard.index') }}">Dashboard</a>
                  </li>
              @endif
   
              <!-- Onglets pour un utilisateur non connecté -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link active fs-5 text-white fw-light mx-3" href="{{ route('page.login') }}">Connexion</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5 text-white fw-light mx-3" href="{{ route('page.register') }}">Inscription</a>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>