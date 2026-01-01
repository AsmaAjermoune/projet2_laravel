@extends('layout')

@section('content')
<h2>Modifier session</h2>

<form method="POST" action="{{ route('sessions.update', $session->codeSess) }}">
@csrf @method('PUT')

<input name="nomSess" value="{{ $session->nomSess }}"><br>
<input type="date" name="dateDebutSess" value="{{ $session->dateDebutSess }}"><br>
<input type="date" name="dateFinSess" value="{{ $session->dateFinSess }}"><br>

<button>Modifier</button>
</form>
@endsection
