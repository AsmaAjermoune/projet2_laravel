@extends('layout')

@section('content')
<h2>Liste des spécialités</h2>

<a href="{{ route('specialites.create') }}">➕ Ajouter spécialité</a>

<table border="1">
<tr>
    <th>Code</th>
    <th>Nom</th>
    <th>Formation</th>
    <th>Actions</th>
</tr>

@foreach($specialites as $s)
<tr>
    <td>{{ $s->codeSpe }}</td>
    <td>{{ $s->nomSpe }}</td>
    <td>{{ $s->formation->titreForm ?? '' }}</td>
    <td>
        <a href="{{ route('specialites.edit', $s->codeSpe) }}">✏️</a>

        <form method="POST"
              action="{{ route('specialites.destroy', $s->codeSpe) }}"
              style="display:inline">
            @csrf
            @method('DELETE')
            <button>🗑</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
