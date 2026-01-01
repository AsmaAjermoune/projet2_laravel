@extends('layout')

@section('content')
<h2>Ajouter étudiant</h2>

<form method="POST" action="{{ route('etudiants.store') }}">
@csrf

<input name="NumCINETU" placeholder="CIN"><br>
<input name="nomEtu" placeholder="Nom"><br>
<input name="prenomEtu" placeholder="Prénom"><br>
<input name="adresseEtu" placeholder="Adresse"><br>
<input name="villeEtu" placeholder="Ville"><br>
<input name="niveauEtu" placeholder="Niveau"><br>

<select name="codeForm">
@foreach($formations as $f)
<option value="{{ $f->codeForm }}">{{ $f->titreForm }}</option>
@endforeach
</select><br>

<button>Enregistrer</button>
</form>
@endsection
