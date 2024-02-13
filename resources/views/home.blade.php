@extends("layout.app")

@section("content")
<div class="sfondo-nero">

    <div class="container">
        <button class= "btn btn-primary series">CURRENT SERIES</button> 
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-lg-2 ">
                    <a href="{{ route("comics_detail", ["param" => $comic["id"]])}}">
                    <div class="card mt-3 ">
                            <img class="thumbs" src="{{ $comic["thumb"] }}" alt="">
                                <div class="card-title">
                                    <h6 class="text-white mt-2 "> {{ $comic["title"]}}</h6>
                                </div>
                        </div>
                    </a>
                </div>
            @endforeach
            
        </div>
        <div class="bottone">

            <button class="btn btn-primary text-white"> Load more</button>
        </div>
    </div>
</div>
@endsection



</html>