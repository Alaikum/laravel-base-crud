@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dettagli fumetto</h1>
        <div class="card">
            <h2>{{ $comic->title }} </h2>
            <p>Data di Uscita:{{ $comic->sale_date }}</p>
            <p>Prezzo: {{ $comic->price }}</p>
            <img src="{{ $comic->thumb }}" alt="Foto non Caricata">
            <p><strong>Descrizione:</strong> {{$comic->description}}</p>
           <p>Series: {{$comic->series}} & Type: {{$comic->type}}</p>
           <p class="card__a"><a href="{{route('comics.edit', $comic)}}">Modifica</a></p>
           <form action="{{route('comics.destroy', $comic)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Elimina">
            
           </form>
        </div>
    </div>
@endsection

<style>
    .card{
  
        font-size: 2.5rem;
        border: 3px dashed salmon;
        max-width: 1200px;
        margin: 0 auto;
        text-align: center
        
    }
    .card__a{
        color: rebeccapurple;
      text-transform: uppercase;
    }
   
</style>