@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Liste des Spécialités</h2>

    <a href="{{ route('specialites.create') }}" class="btn btn-primary mb-3">
         Ajouter Spécialité
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Formation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($specialites as $s)
                    <tr>
                        <td>{{ $s->codeSpec }}</td>
                        <td>{{ $s->nomSpec }}</td>
                        <td>{{ $s->descSpec }}</td>
                        <td>{{ $s->formation->titreForm ?? '' }}</td>
                        <td>
                            <a href="{{ route('specialites.edit', $s->codeSpec) }}"
                               class="btn btn-sm btn-warning me-1">
                                 Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('specialites.destroy', $s->codeSpec) }}"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Êtes-vous sûr de supprimer cette spécialité ?')">
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
