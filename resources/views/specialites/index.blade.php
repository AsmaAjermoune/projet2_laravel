@extends('layout')

@section('content')
<h2>Liste des spécialités</h2>

<a href="{{ route('specialites.create') }}">Ajouter spécialité</a>

<table border="1">
<tr>
    <th>Code</th>
    <th>Nom</th>
    <th>Description</th>
    <th>Formation</th>
    <th>Actions</th>
</tr>

@foreach($specialites as $s)
<tr>
    <td>{{ $s->codeSpec }}</td>
    <td>{{ $s->nomSpec }}</td>
    <td>{{ $s->descSpec }}</td>
    <td>{{ $s->formation->titreForm ?? '' }}</td>
    <td>
        <a href="{{ route('specialites.edit', $s->codeSpec) }}">edit</a>

        <form method="POST"
              action="{{ route('specialites.destroy', $s->codeSpec) }}"
              style="display:inline">
            @csrf
            @method('DELETE')
            <button>supprimer</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
