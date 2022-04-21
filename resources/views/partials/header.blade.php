@php
    
$navLinks = [
    [
        'text' => 'CHARACTERS',
        'href' => '#',
        'isActive' => true,
    ],
    [
        'text' => 'COMICS',
        'href' => '#',
    ],
    [
        'text' => 'MOVIES',
        'href' => '#'
    ],
    [
        'text' => 'TV',
        'href' => '#'
    ],
    [
        'text' => 'GAMES',
        'href' => '#'
    ],
    [
        'text' => 'COLLECTIBLES',
        'href' => '#'
    ],
    [
        'text' => 'VIDEOS',
        'href' => '#'
    ],
    [
        'text' => 'FANS',
        'href' => '#'
    ],
    [
        'text' => 'NEWS',
        'href' => '#'
    ],
    [
        'text' => 'SHOP',
        'href' => '#'
    ],
]; 
        
    
@endphp


<div class="container">
    <div class="container-lg ms_header">
        <figure class="header-logo">
            <img src="{{'img/dc-logo.png'}}" alt="">
        </figure>
        <nav class="nav-container">
            <ul class="nav">
                @foreach ($navLinks as $el)
                    <li class="nav-links">
                        <a :href="{{ $el['href'] }}">{{ $el['text'] }}</a>
                    </li>
                @endforeach     
            </ul>
        </nav>
    </div>
</div>
