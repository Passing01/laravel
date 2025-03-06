<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return redirect()->route('todos.index');
});

Route::resource('todos', TodoController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

// les manière de créer des routes
// Get = il permet de demander quelque chose.
// Post = il permet d'envoyer des données
// Put = il permet de mettre à jour des données
// Delete = il permet de supprimer des données
// Patch = il permet de mettre à jour des données
// Options = il permet de demander les possibilités d'une route
// Head = il permet de demander les informations d'une route
// Link = il permet de créer un lien
// Unlink = il permet de supprimer un lien
// Purge = il permet de supprimer les données d'une route
// Connect = il permet de se connecter à une route

//___________________________________________________________________
//| Methode Http|       URI         |   ACTION   |    ROute          |
//|  GET        |     /todos        |   index    |    todos.index    |
//|  GET        |      /todos/{id}  |   show     |    todos.show     |
//|  POST       |     /todos        |   store    |    todos.store    |
//|  GET        |  /todos/{id}/edit |   edit     |   todos.edit      |
//|  PUT/PATCH  |      /todos/{id}  |   update   |    todos.update   |
//|  DELETE     |      /todos/{id}  |   destroy  |    todos.destroy  |
//|  GET        |      /todos       |   create   |    todos.create   |
