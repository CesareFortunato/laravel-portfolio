@extends('layouts.admin')

@section('content')

<div class="container py-4">

    <div class="d-flex justify-content-between mb-3">
        <h2>Tipi</h2>
        <a href="{{ route('admin.types.create') }}" class="btn btn-primary">
            + Nuovo Tipo
        </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
        </thead>

        <tbody>
            @foreach($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td class="d-flex gap-2">

                        <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-sm btn-warning">
                            Modifica
                        </a>

                        <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Elimina</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection