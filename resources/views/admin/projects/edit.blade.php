@extends("layouts.admin")

@section("title", "Aggiungi un progetto")

@section("content")

    <div class="container">
        <h1 class="mb-4">Modifica il progetto</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-4">

                {{-- Titolo --}}
                <div class="col-md-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo">
                </div>

                {{-- URL --}}
                <div class="col-md-6">
                    <label for="project_url" class="form-label">URL Progetto</label>
                    <input type="url" name="project_url" id="project_url" class="form-control" placeholder="https://...">
                </div>

                {{-- Tipo --}}
                <div class="col-md-6">
                    <label for="type" class="form-label">Tipo Progetto</label>
                    <input type="text" name="type" id="type" class="form-control">
                </div>

                {{-- Tecnologie --}}
                <div class="col-md-6">
                    <label for="technologies" class="form-label">Tecnologie</label>
                    <input type="text" name="technologies" id="technologies" class="form-control">
                </div>

                {{-- Immagine --}}
                <div class="col-md-6">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                {{-- Checkbox --}}
                <div class="col-md-6 d-flex align-items-end">
                    <div class="form-check">
                        <input type="checkbox" name="is_published" id="is_published" class="form-check-input">
                        <label for="is_published" class="form-check-label">Pubblicato</label>
                    </div>
                </div>

                {{-- Descrizione (larga tutta) --}}
                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" rows="4" class="form-control"
                        placeholder="Scrivi una descrizione..."></textarea>
                </div>

            </div>

            {{-- Bottone --}}
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    Salva progetto
                </button>
            </div>

        </form>
    </div>

@endsection