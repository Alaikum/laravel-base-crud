@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vendi il tuo Fumetto</h1>
    </div>
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <p>
                <label for="title">Titolo</label>
                <input type="text" name='title' id='title' placeholder="Titolo del Fumetto">
            </p>
            <p>
                <label for="description">Descrizione</label>
                <input type="text" name='description' id='description' placeholder="Descrizione del Fumetto">
            </p>
            <p>
                <label for="thumb">Link Alla Foto</label>
                <input type="text" name='thumb' id='thumb' placeholder="Inserisci un link valido alla foto del fumetto">
            </p>
            <p>
                <label for="price">Prezzo di Vendita €</label>
                <input type="text" name='price' id='price' placeholder="Inserisci il prezzo a cui vuoi venderlo">
            </p>
            <p>
                <label for="sale-date">Data di pubblicazione</label>
                <input type="text" name='sale_date' id='sale_date' placeholder="2020/01/31">
            </p>
            <p>
                <label for="series">Serie</label>
                <input type="text" name='series' id='series' placeholder="Inserisci la Serie del fumetto">
            </p>
            <p>
                <label for="type">Tipo</label>
                <input type="text" name='type' id='type' placeholder="Inserisci la tipologia del Fumetto">
            </p>
<p>
<input class="bottone" type="submit" value="Metti in vendita">
</p>

        </form>

    </div>
@endsection


<style>
    .container{
        text-align: center;
        margin: 0 auto;

    }
    p{
        font-size: 1.5rem;
    }
    input{
        width: 750px;
        font-size: 1.5rem;
     
    }
    .bottone{
        width: 250px;
        background-color: black;
        color: white;
        border-radius: 15px;
    }
</style>