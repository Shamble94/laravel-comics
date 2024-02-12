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

    <div class="sfondo-blue">

        <div class="container">
            <div>
           
                <ul class="list-unstyled text-white lista-sfondo-blue p-5"> 
                    <li><img src="{{ Vite::asset("resources/img/buy-comics-digital-comics.png")}}" alt="">DIGITAL COMICS</li>
                    <li><img src="{{ Vite::asset("resources/img/buy-comics-merchandise.png")}}" alt="">DC MERCHANDISE</li>
                    <li><img src="{{ Vite::asset("resources/img/buy-comics-shop-locator.png")}}" alt="">SUBSCRIPTION</li>
                    <li><img src="{{ Vite::asset("resources/img/buy-comics-subscriptions.png")}}" alt="">COMIC SHOP LOCATOR</li>
                    <li><img src="{{ Vite::asset("resources/img/buy-dc-power-visa.svg")}}" alt="">DC POWER VISA</li>
                </ul>
            </div>        
        </div>
    </div>
  </div>
   <div class="img-sfondo">
        <div class="container text-grey">
            <div class=" p-3 d-flex">
                
                <ul class ="list-unstyled  "><h3 class="text-white" >DC COMICS</h3>
                    <li>Character</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>Tv</li>
                    <li>Games</li>
                    <li>Video</li>
                    <li>News</li>
                </ul>
                <ul class ="list-unstyled mx-5  "><h3 class="text-white">DC </h3>
                    <li>Termos Of Use</li>
                    <li>Privacy policy (New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
                <ul class ="list-unstyled  "><h3 class="text-white" >SITES</h3>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power visa</li>
                </ul>
            </div>
            <div class=" p-3 d-flex">
                <ul class ="list-unstyled  "><h3 class="text-white">SHOP</h3>
                    <li>Character</li>
                    <li>Comics</li>
                </ul>
            </div>
            <div class=" p-3 d-flex">
                <h6>All site content TM and 2020 DC Entertainment, unless otherwise noted here</h6>

            </div>
            <div class="img-dc">
                <img  class ="logo" src="{{ Vite::asset("resources/img/dc-logo-bg.png")}}" alt="">
            </div>
        </div>
    </div>

</body>

</html>