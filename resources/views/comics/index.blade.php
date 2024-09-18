@extends('layouts.main')

@section('content')
    <div class="container d-flex my-5 flex-wrap  justify-content-betweenr ">
        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif

        <div class="col-12">
            <h1>MAGAZZINO FUMETTI</h1>
        </div>
        @foreach ($comics as $comic)
            <div class="card align-items-stretch" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class=" img-thumbnails card-img-top" alt="{{ $comic->title }}">
                <div class="card-body align-items-stretch">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->type }}</p>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">info</a>
                    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('comics.destroy', $comic) }}" method="POST"
                        onsubmit="return confirm('vuoi veramente eliminare questo elemento')" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Elimina</button>

                    </form>
                </div>
            </div>
        @endforeach

    </div>
@endsection



@section('titlePage')
    Elenco fumetti
@endsection
