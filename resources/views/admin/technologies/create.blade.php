@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <h1 class="mb-4">New Technology</h1>

        <form method="POST" action="{{ route('admin.technologies.store') }}">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Color</label>
                <input type="color" name="color" class="form-control form-control-color" required>
            </div>

            <button class="btn btn-primary">Save</button>
        </form>

    </div>
@endsection