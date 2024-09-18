@extends('layouts.main')

@section('content')
    <div class="container my-5 py-5 px-5 justify-content-center">
        <h1>{{ $comic->title }}</h1>
        <div class="d-inline"><a class="btn btn-success " href="{{ route('comics.index') }}"> INDIETRO </a></div>
        <form action="{{ route('comics.destroy', $comic) }}" method="POST"
            onsubmit="return confirm('vuoi veramente eliminare questo elemento')" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger d-inline my-5" type="submit">Elimina</button>

        </form>

        <div class="row bg-black p-5 justify-content-center">
            <div class="col-12 py-5 ">
                {{ $comic->description }}
            </div>
            <div class="col-5">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

            </div>
            <div class="col-4">
                <strong> {{ $comic->price }}</strong>
            </div>
        </div>
    @endsection

    @section('titlePage')
        dettagli
    @endsection
