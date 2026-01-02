@extends('layout')

@section('content')
<h2>Listes des Formations</h2>

<a href="{{ route('formations.create') }}">Ajouter Formation</a>

<table border="1">
<tr>
    <th>Code</th>
    <th>Titre</th>
    <th>Durée</th>
    <th>Prix</th>
    <th>Session</th>
    <th>Actions</th>
</tr>

@foreach($formations as $f)
<tr>
    <td>{{ $f->codeForm }}</td>
    <td>{{ $f->titreForm }}</td>
    <td>{{ $f->dureeForm }}</td>
    <td>{{ $f->prixForm }}</td>
    <td>{{ $f->session->nomSess ?? '' }}</td>
    <td>
        <a href="{{ route('formations.edit', $f->codeForm) }}">edit</a>
        <form method="POST" action="{{ route('formations.destroy', $f->codeForm) }}" style="display:inline">
            @csrf @method('DELETE')
            <button>supprimer</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
