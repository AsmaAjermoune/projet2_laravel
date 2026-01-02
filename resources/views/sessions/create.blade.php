@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Ajouter Session</h2>

    <form method="POST" action="{{ route('sessions.store') }}" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="codeSess" class="form-control" placeholder="Code">
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nomSess" class="form-control" placeholder="Nom">
        </div>

        <div class="mb-3">
            <label class="form-label">Date Début</label>
            <input type="date" name="dateDebutSess" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Date Fin</label>
            <input type="date" name="dateFinSess" class="form-control">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                Enregistrer
            </button>
            <a href="{{ route('sessions.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
