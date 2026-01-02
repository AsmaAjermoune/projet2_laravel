@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Modifier étudiant</h2>

    <form method="POST"
          action="{{ route('etudiants.update', $etudiant->NumCINETU) }}"
          class="card p-4 shadow-sm">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nomEtu"
                   class="form-control"
                   value="{{ $etudiant->nomEtu }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenomEtu"
                   class="form-control"
                   value="{{ $etudiant->prenomEtu }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" name="adresseEtu"
                   class="form-control"
                   value="{{ $etudiant->adresseEtu }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input type="text" name="villeEtu"
                   class="form-control"
                   value="{{ $etudiant->villeEtu }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Niveau</label>
            <input type="text" name="niveauEtu"
                   class="form-control"
                   value="{{ $etudiant->niveauEtu }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Formation</label>
            <select name="codeForm" class="form-select">
                @foreach($formations as $f)
                    <option value="{{ $f->codeForm }}"
                        {{ $etudiant->codeForm == $f->codeForm ? 'selected' : '' }}>
                        {{ $f->titreForm }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-warning">
                Modifier
            </button>

            <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
