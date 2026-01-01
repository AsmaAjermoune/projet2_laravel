@extends('layout')

@section('content')
<h2>Ajouter formation</h2>

<form method="POST" action="{{ route('formations.store') }}">
@csrf

<input name="codeForm" placeholder="Code"><br>
<input name="titreForm" placeholder="Titre"><br>
<input name="dureeForm" placeholder="Durée"><br>
<input name="prixForm" placeholder="Prix"><br>

<select name="codeSess">
@foreach($sessions as $s)
<option value="{{ $s->codeSess }}">{{ $s->nomSess }}</option>
@endforeach
</select><br>

<button>Enregistrer</button>
</form>
@endsection
