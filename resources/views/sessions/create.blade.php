@extends('layout')

@section('content')
<h2>Ajouter session</h2>

<form method="POST" action="{{ route('sessions.store') }}">
@csrf

Code : <input name="codeSess" placeholder="Code"><br>
Nom : <input name="nomSess" placeholder="Nom"><br>
Date Début : <input type="date" name="dateDebutSess"><br>
Date Fin : <input type="date" name="dateFinSess"><br>

<button>Enregistrer</button>
</form>
@endsection
