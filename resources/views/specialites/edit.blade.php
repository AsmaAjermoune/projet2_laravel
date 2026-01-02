@extends('layout')

@section('content')
<h2>Modifier spécialité</h2>

<form method="POST"
      action="{{ route('specialites.update', $specialite->codeSpec) }}">
@csrf
@method('PUT')
Code: <input name="codeSpec" value="{{ $specialite->codeSpec }}"><br>
Nom: <input name="nomSpec" value="{{ $specialite->nomSpec }}"><br>
Description: <input name="descSpec" value="{{ $specialite->descSpec }}"><br>

Formation : <select name="codeForm">
@foreach($formations as $f)
<option value="{{ $f->codeForm }}"
    {{ $specialite->codeForm == $f->codeForm ? 'selected' : '' }}>
    {{ $f->titreForm }}
</option>
@endforeach
</select><br>

<button>Modifier</button>
</form>
@endsection
