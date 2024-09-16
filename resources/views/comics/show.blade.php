@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>{{ $comic->title }}</h1>
        <div><a class="btn btn-success" href="{{ route('comics.index') }}"> INDIETRO </a></div>
        <div class="row bg-black">
            <div class="col-12">
                {{ $comic->description }}
            </div>
            <div class="col-4">
                {{ $comic->price }}
            </div>
            <div class="col-4">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

            </div>
        </div>
    </div>
@endsection

@section('titlePage')
    dettagli
@endsection
