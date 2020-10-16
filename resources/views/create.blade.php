@extends('layouts.app')
@section('titolo', 'create')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <div class="container mt-2">
        <form action="{{ (!empty($movie)) ? route('movies.update', $movie->id) : route('movies.store') }}" method="post" class="">
            @csrf
            <input name="_method" type="hidden" value="POST">
            @if (!empty($movie))
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $movie->id }}">
            @else
                @method('POST')
            @endif
            <div class="form-group">
                <label for="titolo">Titolo</label>
                <input type="text" name="titolo" class="form-control" id="titolo" placeholder="Inserisci il titolo" value="{{(!empty($movie)) ? $movie->titolo : old('titolo')}}">
            </div>
            <div class="form-group">
                <label for="regista">Regista</label>
                <input type="text" name="regista" class="form-control" id="regista" placeholder="Inserisci il regista" value="{{(!empty($movie)) ? $movie->regista : old('regista')}}">
            </div>
            <div class="form-group">
                <label for="anno">Anno</label>
                <input type="text" name="anno" class="form-control" id="anno" placeholder="Inserisci l'anno" value="{{(!empty($movie)) ? $movie->anno : old('anno')}}">
            </div>
            <div class="form-group">
                <label for="trama">Trama</label>
                <textarea name="trama" class="form-control" id="trama" rows="5">{{(!empty($movie)) ? $movie->trama : old('trama')}}</textarea>
            </div>
            <div class="form-group">
                {{-- al click manda dati allo store --}}
                 <button type="submit" class="btn btn-primary">{{(!empty($movie)) ? 'Edit' : 'Create' }}</button>
                {{-- <input type="submit" value"Invia"> --}}
            </div>
        </form>
    </div>

@endsection
