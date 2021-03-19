@extends('layouts.app')

@section('title', "New Vehicle")

@section('content')

<h3>Inserisci auto</h3>

<div class="container">
    <form action="{{ route('vehicles.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="Marca">Marca</label>
            <input type="text" class="form-control" id="Marca" aria-describedby="emailHelp" name="marca">
        </div>
        <div class="form-group">
            <label for="Modello">Modello</label>
            <input type="text" class="form-control" id="Modello" name="modello">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label" for="Anno">Anno</label>
            <input type="number" class="form-check-input" id="Anno" name="anno">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label" for="Cilindrata">Cilindrata</label>
            <input type="number" class="form-check-input" id="Cilindrata" name="cilindrata">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
@endsection