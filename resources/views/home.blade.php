{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="container  my-5">

        <div class="col-12 m-5 ">
            <h1>MAGAZZINO FUMETTI</h1>
        </div>

        <div class="col-12 m-5 p-5 bg-black">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Dettagli</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">info</a>
                                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">modifica</a>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST"
                                    onsubmit="return confirm('vuoi veramente eliminare questo elemento')" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger d-inline my-5" type="submit">Elimina</button>
                                </form>

                            </td>


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
