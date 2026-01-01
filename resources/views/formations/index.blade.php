@extends('layout')

@section('content')
<h2>Formations</h2>

<a href="{{ route('formations.create') }}">Ajouter</a>

<table border="1">
<tr>
    <th>Titre</th>
    <th>Session</th>
    <th>Actions</th>
</tr>

@foreach($formations as $f)
<tr>
    <td>{{ $f->titreForm }}</td>
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
