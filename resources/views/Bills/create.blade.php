@extends('layout.base')

@section('contents')
    <h1 class="TEXT-CENTER">Inserisci nuova fattura</h1>

    <form method="POST" action="{{ route('bills.store') }}">
        @csrf

        <div class="mb-3">
            <label for="id" class="form-label">Id:</label>
            <input
                type="text"
                class="form-control @error('id') is-invalid @enderror"
                id="id"
                name="id"
                value="{{ old('id') }}"
            >
            <div class="invalid-feedback">
                @error('id') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="number" class="form-label">Numero fattura:</label>
            <input
                type="text"
                class="form-control @error('number') is-invalid @enderror"
                id="number"
                name="number"
                value="{{ old('number') }}"
            >
            <div class="invalid-feedback">
                @error('number') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Anno:</label>
            <input
                type="text"
                class="form-control @error('year') is-invalid @enderror"
                id="year"
                name="year"
                value="{{ old('year') }}"
            >
            <div class="invalid-feedback">
                @error('year') {{ $message }} @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="paid" class="form-label">Incassata:</label>
            <input
                type="text"
                class="form-control @error('paid') is-invalid @enderror"
                id="paid"
                name="paid"
                value="{{ old('paid') }}"
            >
            <div class="invalid-feedback">
                @error('number') {{ $message }} @enderror
            </div>
        </div>
        <button class="btn btn-primary">Salva</button>
    </form>
@endsection