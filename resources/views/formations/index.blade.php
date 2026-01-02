@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Liste des Formations</h2>

    <a href="{{ route('formations.create') }}" class="btn btn-primary mb-3">
        Ajouter Formation
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Code</th>
                    <th>Titre</th>
                    <th>Durée</th>
                    <th>Prix</th>
                    <th>Session</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formations as $f)
                    <tr>
                        <td>{{ $f->codeForm }}</td>
                        <td>{{ $f->titreForm }}</td>
                        <td>{{ $f->dureeForm }}</td>
                        <td>{{ $f->prixForm }}</td>
                        <td>{{ $f->session->nomSess ?? '' }}</td>
                        <td>
                            <a href="{{ route('formations.edit', $f->codeForm) }}"
                               class="btn btn-sm btn-warning me-1">
                                 Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('formations.destroy', $f->codeForm) }}"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Êtes-vous sûr de supprimer cette formation ?')">
                                     Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
