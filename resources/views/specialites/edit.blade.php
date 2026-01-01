@extends('layout')

@section('content')
<h2>Modifier spécialité</h2>

<form method="POST"
      action="{{ route('specialites.update', $specialite->codeSpe) }}">
@csrf
@method('PUT')

<input name="nomSpe" value="{{ $specialite->nomSpe }}"><br>
<input name="descSpe" value="{{ $specialite->descSpe }}"><br>

<select name="codeForm">
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
