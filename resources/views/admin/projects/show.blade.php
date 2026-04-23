@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">

        <a href="{{ route('admin.projects.index') }}" class="text-blue-600 underline mb-4 inline-block">
            ← Torna alla lista
        </a>

        <div class="bg-white shadow-md rounded-lg p-6">

            <h1 class="text-3xl font-bold mb-4">
                {{ $project->title }}
            </h1>

            <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full max-w-md mb-4 rounded">

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