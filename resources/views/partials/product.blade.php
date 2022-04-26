@extends('layouts.home')

@section('mainContent')

<div class="container-lg">
    <div class="product-container">
        <div class="title">
            <h2>{{$product['title']}}</h2>
        </div>
        <div class="info">
            <p>{{$product['description']}}</p>
            <p>{{$product['series']}}</p>
            <p>{{$product['sale_date']}}</p>
            <p>{{$product['price']}}</p>
        </div>
    </div>
</div>


@endsection