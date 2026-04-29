@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <h1>Edit Technology</h1>

        <form method="POST" action="{{ route('admin.technologies.update', $technology) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $technology->name }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Color</label>
                <input type="color" name="color" value="{{ $technology->color }}" class="form-control form-control-color">
            </div>

            <button class="btn btn-success">Update</button>
        </form>

    </div>
@endsection