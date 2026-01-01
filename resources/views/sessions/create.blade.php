@extends('layout')

@section('content')
<h2>Ajouter session</h2>

<form method="POST" action="{{ route('sessions.store') }}">
@csrf

<input name="codeSess" placeholder="Code"><br>
<input name="nomSess" placeholder="Nom"><br>
<input type="date" name="dateDebutSess"><br>
<input type="date" name="dateFinSess"><br>

<button>Enregistrer</button>
</form>
@endsection
