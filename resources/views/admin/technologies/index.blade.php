@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Technologies</h1>

            <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary">
                + New
            </a>
        </div>

        <div class="row g-3">

            @foreach($technologies as $technology)
                <div class="col-md-4">

                    <div class="card shadow-sm p-3">

                        <div class="d-flex justify-content-between align-items-center">

                            <span class="badge" style="background-color: {{ $technology->color }}; color: white;">
                                {{ $technology->name }}
                            </span>

                            <div class="d-flex gap-2">

                                <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
@endsection