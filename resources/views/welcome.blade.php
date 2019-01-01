<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        {{-- jQuery 3+ --}}
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
            .container-fluid {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        </style>

    </head>
    <body>
        <div id="home">
            <div class="container-fluid" id="hero">
                <nav-bar></nav-bar>
                <hero></hero>
            </div>
            <div class="container">
                <about-me></about-me>
                <contact-me></contact-me>
                <footer-bar></footer-bar>
            </div>
        </div>

        <script src="{{ mix('js/home.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
