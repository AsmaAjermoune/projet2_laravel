@extends('layout')

@section('content')
<h2>Modifier étudiant</h2>

<form method="POST" action="{{ route('etudiants.update', $etudiant->NumCIN) }}">
@csrf @method('PUT')

<input name="nomEtu" value="{{ $etudiant->nomEtu }}"><br>
<input name="prenomEtu" value="{{ $etudiant->prenomEtu }}"><br>
<input name="adresseEtu" value="{{ $etudiant->adresseEtu }}"><br>
<input name="villeEtu" value="{{ $etudiant->villeEtu }}"><br>
<input name="niveauEtu" value="{{ $etudiant->niveauEtu }}"><br>

<select name="codeForm">
@foreach($formations as $f)
<option value="{{ $f->codeForm }}" {{ $etudiant->codeForm==$f->codeForm?'selected':'' }}>
{{ $f->titreForm }}
</option>
@endforeach
</select><br>

<button>Modifier</button>
</form>
@endsection
