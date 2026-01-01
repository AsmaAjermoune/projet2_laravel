@extends('layout')

@section('content')
<h2>Etudiants</h2>

<a href="{{ route('etudiants.create') }}">➕ Ajouter</a>

<table border="1">
<tr>
    <th>CIN</th>
    <th>Nom</th>
    <th>Formation</th>
    <th>Actions</th>
</tr>

@foreach($etudiants as $e)
<tr>
    <td>{{ $e->NumCIN }}</td>
    <td>{{ $e->nomEtu }}</td>
    <td>{{ $e->formation->titreForm ?? '' }}</td>
    <td>
        <a href="{{ route('etudiants.edit', $e->NumCIN) }}">✏️</a>
        <form method="POST" action="{{ route('etudiants.destroy', $e->NumCIN) }}" style="display:inline">
            @csrf @method('DELETE')
            <button>🗑</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
