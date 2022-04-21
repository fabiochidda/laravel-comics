@php
    
$listGeneral = [
    [
        'text' => 'Characters'
    ],
    [
        'text' => 'Comics'
    ],
    [
        'text' => 'Movies'
    ],
    [
        'text' => 'TV'
    ],
    [
        'text' => 'Games'
    ],
    [
        'text' => 'Videos'
    ],
    [
        'text' => 'News'
    ],
];

$listShop = [
    [
        'text' => 'Shop DC'
    ],
    [
        'text' => 'Shop DC Collectibles'
    ],
];

$listDcTerms = [
    [
        'text' => 'Terms Of Use'
    ],
    [
        'text' => 'Privacy policy (New)'
    ],
    [
        'text' => 'Ad Choices'
    ],
    [
        'text' => 'Advertising'
    ],
    [
        'text' => 'Jobs'
    ],
    [
        'text' => 'Subscriptions'
    ],
    [
        'text' => 'Talent Workshops'
    ],
    [
        'text' => 'CPSC Certificates'
    ],
    [
        'text' => 'Ratings'
    ],
    [
        'text' => 'Shop Help'
    ],
    [
        'text' => 'Contact Us'
    ],
];

$listSites = [
    [
        'text' => 'DC'
    ],
    [
        'text' => 'MAD Magazine'
    ],
    [
        'text' => 'DC Kids'
    ],
    [
        'text' => 'DC Universe'
    ],
    [
        'text' => 'DC Power Visa'
    ],
];

$social = [
    [
        'imgSrc' => 'img/footer-facebook.png'
    ],
    [
        'imgSrc' => 'img/footer-twitter.png'
    ],
    [
        'imgSrc' => 'img/footer-youtube.png'
    ],
    [
        'imgSrc' => 'img/footer-pinterest.png'
    ],
    [
        'imgSrc' => 'img/footer-periscope.png'
    ],
]

@endphp

<section>
    <div class="container footer">
        <div class="container-lg">
            <div class="list-container">
                <div class="col">
                    <ul>
                        <li class="list-title">
                            <h2>DC COMICS</h2>
                        </li>
                        @foreach ($listGeneral as $el)
                            <li v-for="(el,i) in listGeneral" :key="i">
                                <a href="#">{{ $el['text'] }}</a>
                            </li>
                        @endforeach                        
                    </ul>
                    <ul>
                        <li class="list-title">
                            <h2>SHOP</h2>
                        </li>
                        @foreach ($listShop as $el)
                            <li v-for="(el,i) in listShop" :key="i">
                                <a href="#">{{ $el['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li class="list-title">
                            <h2>DC</h2>
                        </li>
                        @foreach ($listDcTerms as $el)
                            <li v-for="(el,i) in listDcTerms" :key="i">
                                <a href="#">{{ $el['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li class="list-title">
                            <h2>SITES</h2>
                        </li>
                        @foreach ($listSites as $el)
                            <li v-for="(el,i) in listSites" :key="i">
                                <a href="#">{{ $el['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container social-bar">
        <div class="container-lg">
            <div class="sign">
                <button>SIGN-UP NOW!</button>
            </div>
            <div class="social-links">
                <p>FOLLOW US</p>
                <ul class="social-list">
                    @foreach ($social as $el)
                        <li>
                            <img src="{{ $el['imgSrc'] }}" alt="">
                        </li>
                    @endforeach  
                </ul>
            </div>
        </div>
    </div>
</section>