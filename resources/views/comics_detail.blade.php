
@extends("layout.app")
@section("content")

<div class="mx-5">
<div class="container">

    <div class="row">
        <div class="col-6  my-5 fumetto">
                <img class="thumbs  " src="{{ $comic["thumb"] }}" alt="">
                    <h3 class="mx-2" > {{ $comic["title"]}}</h3>  
                          
        </div>  
        <div class="col-6 my-5">
            <h5 > {{ $comic["description"]}}</h5>           
        </div>
        <div class="col-12">
            <h6>Serie:  {{ $comic["series"]}}</h6> <hr>
            <h6> Prezzo:  {{ $comic["price"]}}</h6> <hr>
            <h6> Data di uscita:  {{ $comic["sale_date"]}}</h6> <hr>
            <h6 class="my-3"> Tipologia:  {{ $comic["type"]}}</h6>
            <a href="{{ route("home")}}"><button class="btn btn-primary m-3 ">Home</button></a>

        </div>
</div>
</div>


@endsection
