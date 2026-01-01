@extends('layout')

@section('content')
<h2>Liste des sessions</h2>

<a href="{{ route('sessions.create') }}">➕ Ajouter session</a>

<table border="1">
<tr>
    <th>Code</th>
    <th>Nom</th>
    <th>Début</th>
    <th>Fin</th>
    <th>Actions</th>
</tr>

@foreach($sessions as $s)
<tr>
    <td>{{ $s->codeSess }}</td>
    <td>{{ $s->nomSess }}</td>
    <td>{{ $s->dateDebutSess }}</td>
    <td>{{ $s->dateFinSess }}</td>
    <td>
        <a href="{{ route('sessions.edit', $s->codeSess) }}">✏️</a>
        <form method="POST" action="{{ route('sessions.destroy', $s->codeSess) }}" style="display:inline">
            @csrf @method('DELETE')
            <button>🗑</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
