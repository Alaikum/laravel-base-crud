@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ecco i nostri fumetti</h1>

        @foreach ($comics as $comic)
            <div class="card">
                <h2>{{ $comic->title }} </h2>
                <p>Data di Uscita:{{ $comic->sale_date }}</p>
                <p>Prezzo: {{ $comic->price }}</p>
                <img src="{{ $comic->thumb }}" alt="">
                <p class="card__a"><a href="{{ route('comics.show', $comic) }}">Ulteriori Dettagli</a></p>
            </div>
        @endforeach


    </div>
@endsection


<style>
    .card{
  
        font-size: 3rem;
        border: 1px dashed salmon;
        max-width: 800px;
        margin: 0 auto;
        text-align: center
        
    }
    .card__a{
        color: rebeccapurple;
    }
</style>