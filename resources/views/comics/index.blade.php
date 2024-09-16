@extends('layouts.main')

@section('content')
    <div class="container d-flex my-5 flex-wrap align-content-center">

        @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class=" img-thumbnails card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->type }}</p>
                    <p class="card-text">{{ $comic->series }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <a href="#" class="btn btn-primary">info</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection





@section('titlePage')
    Elenco fumetti
@endsection
