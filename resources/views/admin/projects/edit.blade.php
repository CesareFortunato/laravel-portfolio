@extends("layouts.admin")

@section("title", "Modifica il progetto")

@section("content")

    <div class="container">
        <h1 class="mb-4">Modifica il progetto</h1>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method("PUT")

            <div class="row g-4">

                {{-- Titolo --}}
                <div class="col-md-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" id="title" value="{{ $project->title }}" class="form-control" placeholder="Inserisci il titolo">
                </div>

                {{-- URL --}}
                <div class="col-md-6">
                    <label for="project_url" class="form-label">URL Progetto</label>
                    <input type="url" name="project_url" id="project_url" value="{{ $project->project_url }}" class="form-control" placeholder="https://...">
                </div>

                {{-- Tipo --}}
                <div class="col-md-6">
                    <label for="type" class="form-label">Tipo Progetto</label>
                    <select name="type_id" id="type_id">
                        @foreach ($types as $type){
                            <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}  >{{ $type->name }}</option>
                        }
                        
                        @endforeach
                    </select>
                </div>

                {{-- Tecnologie --}}
                 @foreach ($technologies as $technology)
                        <div class="form-check">
                            <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                                id="tech-{{ $technology->id }}" {{$project->technologies->contains($technology->id)? 'checked' : ''}} class="form-check-input">
                            <label for="tech-{{ $technology->id }}" class="form-check-label">
                                {{ $technology->name }}
                            </label>
                        </div>
                    @endforeach

                {{-- Immagine --}}
                <div class="col-md-6">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                {{-- Checkbox --}}
                <div class="col-md-6 d-flex align-items-end">
                    <div class="form-check">
                        <input type="checkbox" name="is_published" id="is_published"
        class="form-check-input"
        {{ $project->is_published ? 'checked' : '' }}>
                        <label for="is_published" class="form-check-label">Pubblicato</label>
                    </div>
                </div>

                {{-- Descrizione (larga tutta) --}}
                <div class="col-12">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" id="description" rows="4" class="form-control"
                        placeholder="Scrivi una descrizione...">{{ $project->description }}</textarea>
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