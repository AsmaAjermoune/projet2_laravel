@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Ajouter Spécialité</h2>

    <form method="POST" action="{{ route('specialites.store') }}" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="codeSpec" class="form-control" placeholder="Code spécialité">
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nomSpec" class="form-control" placeholder="Nom spécialité">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="descSpec" class="form-control" placeholder="Description">
        </div>

        <div class="mb-3">
            <label class="form-label">Formation</label>
            <select name="codeForm" class="form-select">
                @foreach($formations as $f)
                    <option value="{{ $f->codeForm }}">{{ $f->titreForm }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
            <a href="{{ route('specialites.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
