@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Liste des Sessions</h2>

    <a href="{{ route('sessions.create') }}" class="btn btn-primary mb-3">
        Ajouter Session
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sessions as $s)
                    <tr>
                        <td>{{ $s->codeSess }}</td>
                        <td>{{ $s->nomSess }}</td>
                        <td>{{ $s->dateDebutSess }}</td>
                        <td>{{ $s->dateFinSess }}</td>
                        <td>
                            <a href="{{ route('sessions.edit', $s->codeSess) }}"
                               class="btn btn-sm btn-warning me-1">
                                 Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('sessions.destroy', $s->codeSess) }}"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Êtes-vous sûr de supprimer cette session ?')">
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
