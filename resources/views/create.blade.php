@extends('layouts.app')
@section('titolo', 'create')
@section('content')
    {{-- con questa rotta ritornerà alla mia index --}}
    <div class="container mt-2">
        <form action="{{ route('movies.store') }}" method="post" class="">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="titolo">Titolo</label>
                <input type="text" name="titolo" class="form-control" id="titolo" placeholder="Inserisci il titolo" value="{{old('titolo')}}">
            </div>
            <div class="form-group">
                <label for="regista">Regista</label>
                <input type="text" name="regista" class="form-control" id="regista" placeholder="Inserisci il regista" value="{{old('regista')}}">
            </div>
            <div class="form-group">
                <label for="anno">Anno</label>
                <input type="text" name="anno" class="form-control" id="anno" placeholder="Inserisci l'anno" value="{{old('anno')}}">
            </div>
            <div class="form-group">
                <label for="trama">Trama</label>
                <textarea name="trama" class="form-control" id="trama" rows="3">{{old('trama')}}</textarea>
            </div>
            <div class="form-group">
                {{-- al click manda dati allo store --}}
                <input type="submit" value"Invia">
            </div>
        </form>
    </div>

@endsection
