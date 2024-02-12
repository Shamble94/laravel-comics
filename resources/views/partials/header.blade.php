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

    <main >
        <div class="container">
            <div class="row">
                <div class="col-12 bg-blue">
                    <span>DC POWER VISA</span>
                    <span class="mx-5">ADDITIONAL DC SITE</span>
                </div>
            </div>
        </div>
    </main>
    <div class="container">
        <div class="row p-2">
            <div class="col-2">
                <img src="{{ Vite::asset("resources/img/dc-logo.png")}}" alt="DC">
            </div>
            <div class="col-8">
                <div class="nav-bar">
                    <ul class="list-unstyled ul-header">
                        <li>CHARACTERS</li>
                        <li class="active"> COMICS</li>
                        <li> MOVIES</li>
                        <li>TV</li>
                        <li>GAMES</li>
                        <li>COLLECTIBLES</li>
                        <li>VIDEOS</li>
                        <li>FANS</li>
                        <li>NEWS</li>
                        <li>SHOP</li>
                        <li class="mx-5">  <input type="search" placeholder="search"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>