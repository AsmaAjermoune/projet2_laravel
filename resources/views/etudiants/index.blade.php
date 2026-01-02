@extends('layout')

@section('content')
<div>

    <h2>Liste des Étudiants</h2>

    <a href="{{ route('etudiants.create') }}">
        Ajouter Étudiant
    </a>

    <div>
        <table>
            <thead>
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
                            <a href="{{ route('etudiants.edit', $e->NumCINETU) }}">
                                 Edit
                            </a>

                            <form method="POST"
                                  action="{{ route('etudiants.destroy', $e->NumCINETU) }}"
                                  style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
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
