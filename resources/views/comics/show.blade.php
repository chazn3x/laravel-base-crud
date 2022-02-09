@extends('layouts.base')

@section('h1')
{{$comic->series}}
@endsection

@section('pageContent')
<div class="media">
    <img src="{{$comic->image}}" class="align-self-start mr-3" alt="{{$comic->title}}}">
    <div class="media-body">
        <h2 class="mt-0">{{$comic->title}}</h2>
        <h4 class="my-3 text-capitalize">{{$comic->type}}</h4>
        <p class="my-3">Release date: {{$comic->sale_date}}</p>
        <p>{{$comic->description}}</p>
        <p class="my-3">Price: <strong>{{$comic->price}}$</strong></p>
    </div>
</div>
<div class="text-right">
    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
</div>
@endsection