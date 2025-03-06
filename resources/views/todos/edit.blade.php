@extends('layouts.app')
@section('content')
<h1>Modifier le Todo</h1>

<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}" required>
        @error('title')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description">{{ $todo->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="completed">Complété</label>
        <input type="checkbox" id="completed" value="1" name="completed" {{ $todo->completed ? 'checked' : '' }}>
    </div>
    <button type="submit" class="btn btn-primary">Mettre a jour</button>
</form>

@endsection