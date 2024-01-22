# TP Gestion de Location de Voitures

## Instructions

Bienvenue dans votre projet de gestion de location de voitures ! Suivez ces étapes pour configurer et exécuter votre application.

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