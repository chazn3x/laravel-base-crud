@extends('layouts.base')

@section('h1')
Aggiungi un nuovo fumetto
@endsection

@php
    $formInputs = [
        ['input_type' => 'text', 'label' => 'Titolo', 'db_column' => 'title', 'placeholder' => 'Inserisci il titolo'],
        ['input_type' => 'text', 'label' => 'Serie', 'db_column' => 'series', 'placeholder' => 'Inserisci la serie'],
        ['input_type' => 'text', 'label' => 'Tipo', 'db_column' => 'type', 'placeholder' => 'Inserisci il tipo'],
        ['input_type' => 'number', 'label' => 'Prezzo', 'db_column' => 'price', 'placeholder' => 'Inserisci il prezzo'],
        ['input_type' => 'date', 'label' => 'Data di pubblicazione', 'db_column' => 'sale_date', 'placeholder' => 'Inserisci la data di pubblicazione'],
        ['input_type' => 'text', 'label' => 'Immagine', 'db_column' => 'image', 'placeholder' => "Inserisci l'URL dell'immagine"],
        ['input_type' => 'textarea', 'label' => 'Descrizione', 'db_column' => 'description', 'placeholder' => "Inserisci la descrizione"],
    ]
@endphp

@section('pageContent')
<form action="{{route('comics.store')}}" method="POST">
    @csrf

    @foreach ($formInputs as $input)
        <div class="form-group">
            <label for="{{$input['db_column']}}">{{$input['label']}}</label>
            @if ($input['input_type'] != 'textarea')
                <input
                    type="{{$input['input_type']}}"
                    class="form-control @error($input['db_column']) is-invalid @enderror"
                    id="{{$input['db_column']}}"
                    name="{{$input['db_column']}}"
                    placeholder="{{$input['placeholder']}}"
                    {{$input['input_type'] == 'number' ? 'step=0.01' : ''}}
                    value="{{old($input['db_column'])}}"
                >
            @else
                <textarea
                    class="form-control @error($input['db_column']) is-invalid @enderror"
                    id="{{$input['db_column']}}"
                    name="{{$input['db_column']}}"
                    rows="3"
                    placeholder="{{$input['placeholder']}}">
                        {{old($input['db_column'])}}
                </textarea>
            @endif
            @error($input['db_column'])
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    @endforeach

    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Torna indietro</button></a>
    <button type="submit" class="btn btn-primary">Aggiungi fumetto</button>
</form>
@endsection