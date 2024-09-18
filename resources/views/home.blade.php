{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container  my-5">
        <div class="col-12">
            <h1>MAGAZZINO FUMETTI</h1>
        </div>
        <div class="col-12 m-5 p-5 bg-black">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">prezzo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->price }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>nel magazzino ci sono {{ count($comics) }} elementi</div>
        </div>

    </div>
@endsection


@section('titlePage')
    home
@endsection
