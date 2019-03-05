@extends ("layout")
{{--{{dd($catalog)}}--}}
{{--dd($product)--}}
@section("content")

    @foreach($catalog as $cardProduct)

<br>

<div class="container">
<div class="d-flex justify-content-start "><img src="{{$cardProduct->image1}}" alt="photo" class="img-thumbnail imgperso">


    <div class="card">
        <div class="card-body">
            <h2 class="card-title"> {{--{{$cardProduct->brand->name}} --}} {{$cardProduct->name}}</h2><br>

            <p class="card-text">{{$cardProduct->description}}</p><br>
        <div class="d-flex justify-content-between">

         <div>
            <a href="/panier/{{$cardProduct->id}}" class="btn btnColor btn-lg">Acheter</a>
              <a href="/product/{{$cardProduct->id}}" class="btn btn-secondary btn-lg">Fiche complète</a>
           </div>

            <div>
            <button  type="button" class="btn btnColor ">{{$cardProduct->price}} €</button>
            </div>
        </div>
        </div>
    </div>
</div><br>
</div>

@endforeach

@endsection
