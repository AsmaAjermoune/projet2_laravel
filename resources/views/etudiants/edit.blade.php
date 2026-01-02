@extends('layout')

@section('content')
<div>

    <h2>Modifier étudiant</h2>

    <form method="POST"
          action="{{ route('etudiants.update', $etudiant->NumCINETU) }}">

        @csrf
        @method('PUT')

        <div>
            <label>Nom</label>
            <input type="text" name="nomEtu"
                   value="{{ $etudiant->nomEtu }}">
        </div>

        <div>
            <label>Prénom</label>
            <input type="text" name="prenomEtu"
                   value="{{ $etudiant->prenomEtu }}">
        </div>

        <div>
            <label>Adresse</label>
            <input type="text" name="adresseEtu"
                   value="{{ $etudiant->adresseEtu }}">
        </div>

        <div>
            <label>Ville</label>
            <input type="text" name="villeEtu"
                   value="{{ $etudiant->villeEtu }}">
        </div>

        <div>
            <label>Niveau</label>
            <input type="text" name="niveauEtu"
                   value="{{ $etudiant->niveauEtu }}">
        </div>

        <div>
            <label>Formation</label>
            <select name="codeForm">
                @foreach($formations as $f)
                    <option value="{{ $f->codeForm }}"
                        {{ $etudiant->codeForm == $f->codeForm ? 'selected' : '' }}>
                        {{ $f->titreForm }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">
                Modifier
            </button>

            <a href="{{ route('etudiants.index') }}">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
