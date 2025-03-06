Projet de Gestion des Tâches

Description

Ce projet est une application web de gestion des tâches développée avec Laravel et MariaDB. Il permet aux utilisateurs de créer, organiser et suivre leurs tâches quotidiennes de manière efficace.

Technologies utilisées

Framework : Laravel

Base de données : MariaDB

Langages : PHP, JavaScript, HTML, CSS

Frontend : Blade (Laravel), Bootstrap

Gestion des dépendances : Composer, NPM

Fonctionnalités


Création, modification et suppression de tâches

Attribution des tâches à des utilisateurs

Installation

Prérequis

Avant d'installer le projet, assurez-vous d'avoir installé les éléments suivants :

PHP (>=8.0)

Composer

Laravel

MariaDB

Node.js & NPM (facultatif, pour les assets frontend)

Étapes d'installation

Cloner le dépôt

git clone https://github.com/Passing01/laravel.git
cd laravel

Installer les dépendances

composer install
npm install

Configurer l'environnement
Copier le fichier .env.example et le renommer en .env, puis configurer les variables de base de données et autres paramètres.

cp .env.example .env

Générer la clé de l'application

php artisan key:generate

Configurer la base de données
Créer une base de données MariaDB et renseigner les informations dans le fichier .env.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_base
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe

Exécuter les migrations et les seeders

php artisan migrate --seed

Lancer le serveur

php artisan serve

L'application sera accessible via http://127.0.0.1:8000

Utilisation

Création et gestion des tâches

Suivi et mise à jour des statuts des tâches
