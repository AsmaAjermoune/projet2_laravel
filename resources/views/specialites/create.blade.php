@extends('layout')

@section('content')
<h2>Ajouter spécialité</h2>

<form method="POST" action="{{ route('specialites.store') }}">
@csrf

<input name="codeSpe" placeholder="Code spécialité"><br>
<input name="nomSpe" placeholder="Nom spécialité"><br>
<input name="descSpe" placeholder="Description"><br>

<select name="codeForm">
@foreach($formations as $f)
    <option value="{{ $f->codeForm }}">{{ $f->titreForm }}</option>
@endforeach
</select><br>

<button>Enregistrer</button>
</form>
@endsection
