@extends('layouts.base')

@section('h1')
Modifica il fumetto: {{$comic->title}}
@endsection

@section('pageContent')
<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo" value="{{$comic->type}}">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$comic->price}}">
    </div>
    <div class="form-group">
        <label for="sale_date">Data di pubblicazione</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di pubblicazione" value="{{$comic->sale_date}}">
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'URL dell'immagine" value="{{$comic->image}}">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione" >{{$comic->description}}</textarea>
    </div>
    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
    <button type="submit" class="btn btn-primary">Modifica fumetto</button>
</form>
@endsection