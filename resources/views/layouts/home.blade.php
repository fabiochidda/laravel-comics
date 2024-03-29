<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel Comics</title>
</head>
<body>

    <header>
        @include('partials.header')
    </header>

    <main>
        @include('partials.jumbotron')
        @yield('mainContent')
        @include('partials.merchandise')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
    
</body>
</html>