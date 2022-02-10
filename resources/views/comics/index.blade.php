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
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->price}}$</td>
                <td class="text-capitalize">{{$comic->type}}</td>
                <td><a href="{{route('comics.edit', $comic->id)}}"><button type="button" class="btn btn-primary">Modifica</button></a></td>
                <td>
                    <button data="{{$comic->id}}" class="btn btn-danger btn__delete">Elimina</button>
                    {{-- Delete banner --}}
                    <div id="banner-{{$comic->id}}" class="banner">
                        <div id="banner-content-{{$comic->id}}" class="banner-content">
                            <div class="banner__header">
                                <div class="row">
                                    <div class="col-11" id="delete-title-{{$comic->id}}">
                                        <span>{{$comic->title}}</span>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="close btn__close" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <p class="delete-message">Sei sicuro di voler eliminare {{$comic->title}}?</p>
                            <div class="d-flex m-5 justify-content-center">
                                <button type="button" class="btn btn-primary mx-2 btn__close">Annulla</button>
                                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">Elimina</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection