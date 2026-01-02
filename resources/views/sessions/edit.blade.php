@extends('layout')

@section('content')
<h2>Modifier session</h2>

<form method="POST" action="{{ route('sessions.update', $session->codeSess) }}">
@csrf @method('PUT')

Code : <input name="codeSess" value="{{ $session->codeSess }}"><br>
Nom : <input name="nomSess" value="{{ $session->nomSess }}"><br>
Date Début : <input type="date" name="dateDebutSess" value="{{ $session->dateDebutSess }}"><br>
Date Fin : <input type="date" name="dateFinSess" value="{{ $session->dateFinSess }}"><br>

<button>Modifier</button>
</form>
@endsection
