@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Ajouter étudiant</h2>

    <form method="POST" action="{{ route('etudiants.store') }}" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">CIN</label>
            <input type="text" name="NumCINETU" class="form-control" placeholder="CIN">
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nomEtu" class="form-control" placeholder="Nom">
        </div>

        <div class="mb-3">
            <label class="form-label">Prénom</label>
            <input type="text" name="prenomEtu" class="form-control" placeholder="Prénom">
        </div>

        <div class="mb-3">
            <label class="form-label">Adresse</label>
            <input type="text" name="adresseEtu" class="form-control" placeholder="Adresse">
        </div>

        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input type="text" name="villeEtu" class="form-control" placeholder="Ville">
        </div>

        <div class="mb-3">
            <label class="form-label">Niveau</label>
            <input type="text" name="niveauEtu" class="form-control" placeholder="Niveau">
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

            <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
