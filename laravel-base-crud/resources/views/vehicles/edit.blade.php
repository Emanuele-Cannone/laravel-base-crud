@extends('layouts.app')

@section('title', "New Vehicle")

@section('content')

<h3>Modifica Auto</h3>

<div class="container">
    <form action="{{ route('vehicles.update', $Veicoli->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Marca">Marca</label>
            <input type="text" class="form-control" id="Marca" aria-describedby="emailHelp" name="marca" value="{{ $Veicoli->marca }}">
        </div>
        <div class="form-group">
            <label for="Modello">Modello</label>
            <input type="text" class="form-control" id="Modello" name="modello" value="{{ $Veicoli->modello }}">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label" for="Anno">Anno</label>
            <input type="number" class="form-check-input" id="Anno" name="anno" value="{{ $Veicoli->anno }}">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label" for="Cilindrata">Cilindrata</label>
            <input type="number" class="form-check-input" id="Cilindrata" name="cilindrata" value="{{ $Veicoli->cilindrata }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>
@endsection