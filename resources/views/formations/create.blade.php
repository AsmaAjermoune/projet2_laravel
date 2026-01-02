@extends('layout')

@section('content')
<h2>Ajouter formation</h2>

<form method="POST" action="{{ route('formations.store') }}">
@csrf
Code : <input name="codeForm" placeholder="Code"><br>
Titre : <input name="titreForm" placeholder="Titre"><br>
Durée : <input name="dureeForm" placeholder="Durée"><br>
Prix : <input name="prixForm" placeholder="Prix"><br>

Session : <select name="codeSess">
@foreach($sessions as $s)
<option value="{{ $s->codeSess }}">{{ $s->nomSess }}</option>
@endforeach
</select><br>

<button>Enregistrer</button>
</form>
@endsection
