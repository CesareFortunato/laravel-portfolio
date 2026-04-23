@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Dashboard Admin</h2>

    <p>Benvenuto nell'area amministratore!</p>

    <a href="{{ route('admin.projects.index') }}" class="bg-blue-600 text-blue px-4 py-2 rounded">
        Vai ai Progetti
    </a>
@endsection