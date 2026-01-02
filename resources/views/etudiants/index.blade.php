@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Liste des Étudiants</h2>

    <a href="{{ route('etudiants.create') }}" class="btn btn-primary mb-3">
        Ajouter Étudiant
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>CIN</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Formation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as $e)
                    <tr>
                        <td>{{ $e->NumCINETU }}</td>
                        <td>{{ $e->nomEtu }}</td>
                        <td>{{ $e->prenomEtu }}</td>
                        <td>{{ $e->adresseEtu }}</td>
                        <td>{{ $e->villeEtu }}</td>
                        <td>{{ $e->formation->titreForm ?? '' }}</td>
                        <td>
                            <a href="{{ route('etudiants.edit', $e->NumCINETU) }}"
                               class="btn btn-sm btn-warning me-1">
                                 Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('etudiants.destroy', $e->NumCINETU) }}"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Êtes-vous sûr de supprimer cet étudiant ?')">
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
