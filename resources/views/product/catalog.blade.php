@extends ("layout")
@section("content")

    @foreach($catalog as $cardProduct)      {{--/////////////////////////////////         Boucle qui fabrique une carte produit par produit            //////////////////////////////////////////////////////////////////////--}}

<br>

<div class="container">
<div class="d-flex">

    <img src="{{$cardProduct->image1}}" alt="photo" class="img-thumbnail imgperso">      {{--/////////////////       Image produit      ///////////////////////////////////////////////////////--}}

    <div class="card car-perso">
        <div class="card-body">
            <h2 class="card-title"> {{--{{$cardProduct->brand->name}} --}} {{$cardProduct->name}}</h2><br>    {{-- /////////////////       Nom produit      ///////////////////////////////////////////////////////--}}

            <p class="card-text">{{$cardProduct->description}}</p><br>                      {{-- /////////////////       Description produit      ///////////////////////////////////////////////////////--}}
        <div class="d-flex justify-content-between">

         <div class="d-flex">
             <form action="/cart" method="post" enctype="multipart/form-data" class="mr-2">
                 {{csrf_field()}}
                 <input type="hidden" name="product" value="{{$cardProduct->id}}">
                 <button type="submit" class="btn btnColor btn-lg">Acheter</button>
             </form>
              <a href="/product/{{$cardProduct->id}}" class="btn btn-secondary btn-lg">Fiche complète</a>
           </div>

            <div>
            <button  type="button" class="btn btnColor " id="test">{{$cardProduct->price}} €</button>   {{--/////////////////       Prix produit      ///////////////////////////////////////////////////////--}}
            </div>
        </div>
        </div>
    </div>
</div><br>
</div>

@endforeach

@endsection
