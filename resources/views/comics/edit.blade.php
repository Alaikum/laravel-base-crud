@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica i dati del tuo Fumetto</h1>
    </div>
    <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <p>
                <label for="title">Titolo</label>
                {{-- BORDO ROSSO CON ERORRE  E VALUE CHE NON SI PERDE CON L'ERRORE --}}
                <input type="text" name='title' id='title'style=" @error('title') border-color:red @enderror"
                    value="{{ old('title',$comic->title) }}" placeholder="Titolo del Fumetto">
                {{-- MESSAGGIO DI ERRORE VICINO ALL INPUT CHE GENERA ERRORE  --}}
                @error('title')
                <div class="alert alert-danger" style="color: red; font-size:2rem;">{{ $message }}</div>
            @enderror
            </p>
            <p>
                <label for="description">Descrizione</label>
                <input type="text" name='description' id='description'
                    style=" @error('description') border-color:red @enderror" value="{{ old('description',$comic->description) }}"
                    placeholder="Descrizione del Fumetto">
                @error('description')
                <div class="alert alert-danger" style="color: red; font-size:2rem;">{{ $message }}</div>
            @enderror
            </p>
            <p>
                <label for="thumb">Link Alla Foto</label>
                <input type="text" name='thumb' id='thumb' style=" @error('thumb') border-color:red @enderror"
                    value="{{ old('thumb',$comic->thumb) }}" placeholder="Inserisci un link valido alla foto del fumetto">
                @error('thumb')
                <div class="alert alert-danger" style="color: red; font-size:2rem;">{{ $message }}</div>
            @enderror
            </p>
            <p>
                <label for="price">Prezzo di Vendita €</label>
                <input type="text" name='price' id='price' style=" @error('price') border-color:red @enderror"
                    value="{{ old('price', $comic->price) }}" placeholder="Inserisci il prezzo a cui vuoi venderlo">
                @error('price')
                <div class="alert alert-danger" style="color: red; font-size:2rem;">{{ $message }}</div>
            @enderror
            </p>
            <p>
                <label for="sale-date">Data di pubblicazione</label>
                <input type="text" name='sale_date' id='sale_date'
                    style=" @error('sale_date') border-color:red @enderror" value="{{ old('sale_date',$comic->sale_date) }}"
                    placeholder="2020-01-31">
                @error('sale_date')
                <div class="alert alert-danger" style="color: red; font-size:2rem;">{{ $message }}</div>
            @enderror
            </p>
            <p>
                <label for="series">Serie</label>
                <input type="text" name='series' id='series' style=" @error('series') border-color:red @enderror"
                    value="{{ old('series',$comic->series) }}" placeholder="Inserisci la Serie del fumetto">
                @error('series')
                <div class="alert alert-danger" style="color: red; font-size:2rem;">{{ $message }}</div>
            @enderror
            </p>
            <p>
                <label for="type">Tipo</label>
                <input type="text" name='type' id='type' style=" @error('type') border-color:red @enderror"
                    value="{{ old('type',$comic->type) }}" placeholder="Inserisci la tipologia del Fumetto">
                @error('type')
                <div class="alert alert-danger" style="color: red; font-size:2rem;">{{ $message }}</div>
            @enderror
            </p>
            <p>
                <input class="bottone" type="submit" value="Modifica">
            </p>

        </form>

        {{-- STAMPA L'ERRORE  --}}
        {{-- @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif --}}
    </div>
@endsection


<style>
    .container {
        text-align: center;
        margin: 0 auto;

    }

    p {
        font-size: 1.5rem;
    }

    input {
        width: 750px;
        font-size: 1.5rem;

    }

    .bottone {
        width: 250px;
        background-color: black;
        color: white;
        border-radius: 15px;
    }
</style>
