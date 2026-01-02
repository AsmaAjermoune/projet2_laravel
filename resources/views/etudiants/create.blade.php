@extends('layout')

@section('content')
<div>

    <h2>Ajouter étudiant</h2>

    <form method="POST" action="{{ route('etudiants.store') }}">
        @csrf

        <div>
            <label>CIN</label>
            <input type="text" name="NumCINETU" placeholder="CIN">
        </div>

        <div>
            <label>Nom</label>
            <input type="text" name="nomEtu" placeholder="Nom">
        </div>

        <div>
            <label>Prénom</label>
            <input type="text" name="prenomEtu" placeholder="Prénom">
        </div>

        <div>
            <label>Adresse</label>
            <input type="text" name="adresseEtu" placeholder="Adresse">
        </div>

        <div>
            <label>Ville</label>
            <input type="text" name="villeEtu" placeholder="Ville">
        </div>

        <div>
            <label>Niveau</label>
            <input type="text" name="niveauEtu" placeholder="Niveau">
        </div>

        <div>
            <label>Formation</label>
            <select name="codeForm">
                @foreach($formations as $f)
                    <option value="{{ $f->codeForm }}">{{ $f->titreForm }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">
                Enregistrer
            </button>

            <a href="{{ route('etudiants.index') }}">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
