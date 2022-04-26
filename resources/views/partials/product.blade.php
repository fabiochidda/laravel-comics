@extends('layouts.home')

@section('mainContent')

<div class="container-lg">
    <div class="product-container">
        <div class="title">
            <figure>
                <img src="{{$product['thumb']}}" alt="">
            </figure>
            <h2>{{$product['title']}}</h2>
        </div>
        <div class="info">
            <p>Descrizione: {{$product['description']}}</p>
            <p>Serie: {{$product['series']}}</p>
            <p>Data pubblicazione{{$product['sale_date']}}</p>
            <p>Prezzo: {{$product['price']}}</p>
        </div>
    </div>
</div>


@endsection