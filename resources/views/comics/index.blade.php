@extends('layouts.base')

@section('h1')
All Comics
@endsection

@section('pageContent')
<div class="text-right my-3">
    <a href="{{route('comics.create')}}"><button type="button" class="btn btn-primary">Aggiungi nuovo fumetto</button></a>
</div>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Data di pubblicazione</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Tipo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        {{-- <a href="{{route('comics.show', $comic->id)}}"> --}}
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->price}}$</td>
                <td class="text-capitalize">{{$comic->type}}</td>
                <td><a href="{{route('comics.edit', $comic->id)}}"><button type="button" class="btn btn-primary">Modifica</button></a></td>
                <td>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
        {{-- </a> --}}
        @endforeach
    </tbody>
</table>
@endsection