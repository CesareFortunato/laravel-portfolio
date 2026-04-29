@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <h2>Nuovo Tipo</h2>

    <form action="{{ route('admin.types.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Salva</button>
        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Annulla</a>
    </form>

</div>

@endsection