# Application Gestion de Location de Voitures

## Objectif de l'application

Le but de ce projet est de développer une application de gestion de location de voitures à l'aide du langage PHP, du framework Laravel, et d'une base de données MySQL.

## Fonctionnalités

- Gestion des voitures du parc (création, modification, suppression, listing).
- Liste des individus ayant loué une voiture.
- Emprunt et retour de voitures par des individus.
- Connexion obligatoire pour louer un véhicule.
- Consultation de la liste des véhicules possible en mode non connecté.
- Ajout, modification, et suppression de véhicules réservé aux profils administrateurs.


### 1. Installation

```bash
git clone https://github.com/Charlot-DEDJINOU/CarRentalManagement-Laravel.git
cd CarRentalManagement-Laravel
composer install
```

### 2. Configuration de la base de données

```bash
php artisan migrate
```

### 3. Création de l'administrateur

```bash
php artisan db:seed --class=AdminSeeder
```

L'administrateur a pour email : admin@gmail.com et mot de passe : admin

### 4. Création des voitures par défaut

```bash
php artisan db:seed --class=CarsSeeder
```

### 5. Lancement de l'application

```bash
php artisan serve
```

Visitez [http://localhost:8000](http://localhost:8000) dans votre navigateur pour accéder à l'application.

```