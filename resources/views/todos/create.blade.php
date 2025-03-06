@extends('layouts.app')
@section('content')
<h1>Ajouter une nouvelle Tache</h1>

<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    @error('title')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control"></textarea>
        <div class="form-group form-check">
            <input type="checkbox" name="completed" value="1" id="completed" {{ old('completed') ? 'checked' : '' }}>
            <label class="form-check-label" for="completed">Complété</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
