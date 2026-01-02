@extends('layout')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Modifier Formation</h2>

    <form method="POST" action="{{ route('formations.update', $formation->codeForm) }}" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="codeForm" class="form-control" value="{{ $formation->codeForm }}" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titreForm" class="form-control" value="{{ $formation->titreForm }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Durée</label>
            <input type="text" name="dureeForm" class="form-control" value="{{ $formation->dureeForm }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prixForm" class="form-control" value="{{ $formation->prixForm }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Session</label>
            <select name="codeSess" class="form-select">
                @foreach($sessions as $s)
                    <option value="{{ $s->codeSess }}" {{ $formation->codeSess == $s->codeSess ? 'selected' : '' }}>
                        {{ $s->nomSess }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-warning">
                Modifier
            </button>
            <a href="{{ route('formations.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>

    </form>

</div>
@endsection
