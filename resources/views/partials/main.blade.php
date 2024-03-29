@extends('layouts.home')

@section('mainContent')

<section>
    <div class="container ms_main">
        <div class="container-lg ms_mainContent">
            <div class="comics-container">
                @foreach ($comics as $id => $el)
                    <a href="{{route('comics', ['id' => $id])}}" class="comic-card">
                        <figure class="comic-image">
                            <img src="{{ $el['thumb'] }}" alt="">
                        </figure>
                
                        <div class="comic-title">
                            <h3>{{ $el['title'] }}</h3>
                        </div>
                    </a>
                @endforeach   
            </div>
            <div class="load-more-button">
                <button>LOAD MORE</button>
            </div>
        </div>
    </div>
</section>
    
@endsection