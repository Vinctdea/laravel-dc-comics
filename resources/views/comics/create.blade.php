@extends('layouts.main')

@section('content')
    <div class="container py-5 my-5 bg-black">
        <h1>Aggiungi un fumetto</h1>

        {{-- controllo errori --}}
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- bottoni --}}
        <div><a class="btn btn-success" href="{{ route('comics.index') }}"> INDIETRO </a></div>


        {{-- form --}}
        <form class="py-5" action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="titolo">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine Url</label>
                <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Immagine Url">

            </div>

            <div class="mb-3">
                <label for="description" class="form-label"></label>
                <textarea id="description" name="description" cols="50" rows="10" placeholder="descrizione"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo">
            </div>
            <button type="submit" class="btn btn-success">Aggiungi</button>
            <button type="reset" class="btn btn-danger">Annulla</button>

        </form>

    </div>
@endsection

@section('titlePage')
    nuovo fumetto
@endsection
