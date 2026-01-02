@extends('layout')

@section('content')
<h2>Modifier formation</h2>

<form method="POST" action="{{ route('formations.update', $formation->codeForm) }}">
@csrf @method('PUT')

Code : <input name="codeForm" value="{{ $formation->codeForm }}"><br>
Titre : <input name="titreForm" value="{{ $formation->titreForm }}"><br>
Durée : <input name="dureeForm" value="{{ $formation->dureeForm }}"><br>
Prix : <input name="prixForm" value="{{ $formation->prixForm }}"><br>

Session : <select name="codeSess">
@foreach($sessions as $s)
<option value="{{ $s->codeSess }}" {{ $formation->codeSess==$s->codeSess?'selected':'' }}>
{{ $s->nomSess }}
</option>
@endforeach
</select><br>

<button>Modifier</button>
</form>
@endsection
