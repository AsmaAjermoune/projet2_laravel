@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Ajouter Formation</h2>

    <form method="POST" action="{{ route('formations.store') }}" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="codeForm" class="form-control" placeholder="Code">
        </div>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titreForm" class="form-control" placeholder="Titre">
        </div>

        <div class="mb-3">
            <label class="form-label">Durée</label>
            <input type="text" name="dureeForm" class="form-control" placeholder="Durée">
        </div>

        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prixForm" class="form-control" placeholder="Prix">
        </div>

        <div class="mb-3">
            <label class="form-label">Session</label>
            <select name="codeSess" class="form-select">
                @foreach($sessions as $s)
                    <option value="{{ $s->codeSess }}">{{ $s->nomSess }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
            <a href="{{ route('formations.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
