@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Modifier Session</h2>

    <form method="POST" action="{{ route('sessions.update', $session->codeSess) }}" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="codeSess" class="form-control" value="{{ $session->codeSess }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nomSess" class="form-control" value="{{ $session->nomSess }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Date Début</label>
            <input type="date" name="dateDebutSess" class="form-control" value="{{ $session->dateDebutSess }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Date Fin</label>
            <input type="date" name="dateFinSess" class="form-control" value="{{ $session->dateFinSess }}">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-warning">
                Modifier
            </button>
            <a href="{{ route('sessions.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
