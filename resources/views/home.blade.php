<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
@include ("partials.header");
@include("partials.jumbotron")
<div class="sfondo-nero">

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-lg-2 ">
                    <div class="card mt-3 ">
                        <img class="thumbs" src="{{ $comic["thumb"] }}" alt="">
                            <div class="card-title">
                                <h6 class="text-white mt-2 "> {{ $comic["title"]}}</h6>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include("partials.footer")
</body>

</html>