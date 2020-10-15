@extends('layouts.app')
@section('content')
    {{-- con questa rotta ritornerà alla mia index --}}
    <div class="container mt-2">
        <form action="{{ route('movies.store') }}" method="post" class="">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="titolo">Titolo</label>
                <input type="text" name="titolo" class="form-control" id="titolo" placeholder="Inserisci titolo">
            </div>
            <div class="form-group">
                <label for="regista">Regista</label>
                <input type="text" name="regista" class="form-control" id="regista" placeholder="Inserisci regista">
            </div>
            <div class="form-group">
                <label for="anno">Anno</label>
                <input type="text" name="anno" class="form-control" id="anno" placeholder="Inserisci anno">
            </div>
            <div class="form-group">
                <label for="trama">Trama</label>
                <textarea name="trama" class="form-control" id="trama" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value"Invia">
            </div>
        </form>
    </div>

@endsection
