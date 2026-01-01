@extends('layout')

@section('content')
<h2>Modifier formation</h2>

<form method="POST" action="{{ route('formations.update', $formation->codeForm) }}">
@csrf @method('PUT')

<input name="titreForm" value="{{ $formation->titreForm }}"><br>
<input name="dureeForm" value="{{ $formation->dureeForm }}"><br>
<input name="prixForm" value="{{ $formation->prixForm }}"><br>

<select name="codeSess">
@foreach($sessions as $s)
<option value="{{ $s->codeSess }}" {{ $formation->codeSess==$s->codeSess?'selected':'' }}>
{{ $s->nomSess }}
</option>
@endforeach
</select><br>

<button>Modifier</button>
</form>
@endsection
