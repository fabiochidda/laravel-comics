@php
    
    $merch = [
                [
                    'text' => 'DIGITAL COMICS',
                    'imgSrc' => 'img/buy-comics-digital-comics.png'
                ],
                [
                    'text' => 'DC MERCHANDISE',
                    'imgSrc' => 'img/buy-comics-merchandise.png'
                ],
                [
                    'text' => 'SUBSCRIPTION',
                    'imgSrc' => 'img/buy-comics-subscriptions.png'
                ],
                [
                    'text' => 'COMIC SHOP LOCATOR',
                    'imgSrc' => 'img/buy-comics-shop-locator.png'
                ],
                [
                    'text' => 'DC POWER VISA',
                    'imgSrc' => 'img/buy-dc-power-visa.svg'
                ],
            ]

@endphp

<section>
    <div class="container">
        <div class="container-lg">
            <ul class="merch-container">
                @foreach ($merch as $el)
                    <li>
                        <img src="{{ $el['imgSrc'] }}" alt="">
                        <p>{{ $el['text'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>