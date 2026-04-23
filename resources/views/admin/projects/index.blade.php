@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">

        <h1 class="text-2xl font-bold mb-6">Progetti</h1>

        <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Titolo</th>
                    <th class="p-3 text-left">Tipo</th>
                    <th class="p-3 text-left">Tecnologie</th>
                    <th class="p-3 text-left">Pubblicato</th>
                    <th class="p-3 text-left">Azioni</th>
                </tr>
            </thead>

            <tbody>
                @foreach($projects as $project)
                    <tr class="border-t">
                        <td class="p-3">{{ $project->id }}</td>
                        <td class="p-3 font-semibold">{{ $project->title }}</td>
                        <td class="p-3">{{ $project->type }}</td>
                        <td class="p-3">{{ $project->technologies }}</td>

                        <td class="p-3">
                            @if($project->is_published)
                                <span class="text-green-600 font-bold">✔</span>
                            @else
                                <span class="text-red-600 font-bold">✖</span>
                            @endif
                        </td>

                        <td class="p-3">
                            <a href="{{ route('admin.projects.show', $project) }}" class="text-blue-600 underline">
                                Vedi
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection