@extends('layouts.admin')

@section('content')

    <div class="d-flex py-4 gap-2">
        <a class="btn btn-outline-warning" href="{{ route("admin.projects.edit", $project) }}">Modifica</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Elimina
        </button>


    </div>

    <div class="container mx-auto p-6">

        <a href="{{ route('admin.projects.index') }}" class="text-blue-600 underline mb-4 inline-block">
            ← Torna alla lista
        </a>

        <div class="bg-white shadow-md rounded-lg p-6">

            <h1 class="text-3xl font-bold mb-4">
                {{ $project->title }}
            </h1>

            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                class="w-full max-w-md mb-4 rounded">

            <p class="mb-4 text-gray-700">
                {{ $project->description }}
            </p>

            <div class="mb-2">
                <strong>Tipo:</strong> {{ $project->type }}
            </div>

            <div class="mb-2">
                <strong>Tecnologie:</strong> {{ $project->technologies }}
            </div>

            <div class="mb-2">
                <strong>Pubblicato:</strong>
                {{ $project->is_published ? 'Sì' : 'No' }}
            </div>

            <div class="mt-4">
                <a href="{{ $project->project_url }}" target="_blank" class="text-blue-600 underline">
                    Vai al progetto
                </a>
            </div>

        </div>
    </div>
@endsection



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina il progetto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Vuoi eliminare il progetto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{ route("admin.projects.destroy", $project) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" class="btn btn-outline-danger" value="Elimina">
                </form>
            </div>
        </div>
    </div>
</div>