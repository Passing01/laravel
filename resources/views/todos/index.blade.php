@extends('layouts.app')

@section('content')
<h1>Liste des Taches</h1>
<a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Ajouter une Taches</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Complété</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($todos as $todo)
            <tr>
                <td>{{ $todo->id }}</td>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->description }}</td>
                <td>{{ $todo->completed? 'Oui' : 'Non' }}</td>
                <td>
                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Etes vous sur?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection