@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <h2>Modifica Tipo</h2>

    <form action="{{ route('admin.types.update', $type) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" value="{{ $type->name }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control">{{ $type->description }}</textarea>
        </div>

        <button class="btn btn-success">Aggiorna</button>
        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Annulla</a>
    </form>

</div>

@endsection