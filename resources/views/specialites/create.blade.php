@extends('layout')

@section('content')
<h2>Ajouter spécialité</h2>

<form method="POST" action="{{ route('specialites.store') }}">
@csrf

Code: <input name="codeSpec" placeholder="Code spécialité"><br>
Nom: <input name="nomSpec" placeholder="Nom spécialité"><br>
Description: <input name="descSpec" placeholder="Description"><br>

Formation : <select name="codeForm">
@foreach($formations as $f)
    <option value="{{ $f->codeForm }}">{{ $f->titreForm }}</option>
@endforeach
</select><br>

<button>Enregistrer</button>
</form>
@endsection
