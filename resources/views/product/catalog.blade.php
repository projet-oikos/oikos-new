@extends ("layout")
{{--{{dd($catalog)}}--}}
{{--dd($product)--}}
@section("content")

    @foreach($catalog as $cardProduct)      {{--/////////////////////////////////         Boucle qui fabrique une carte produit par produit            //////////////////////////////////////////////////////////////////////--}}

<br>
<div class="container">
<div class="d-flex justify-content-start "><img src="{{$cardProduct->image1}}" alt="photo" class="img-thumbnail imgperso">      {{--/////////////////       Image produit      ///////////////////////////////////////////////////////--}}

    <div class="card">
        <div class="card-body">
            <h2 class="card-title"> {{--{{$cardProduct->brand->name}} --}} {{$cardProduct->name}}</h2><br>            {{-- /////////////////       Nom produit      ///////////////////////////////////////////////////////--}}

            <p class="card-text">{{$cardProduct->description}}</p><br>                      {{-- /////////////////       Description produit      ///////////////////////////////////////////////////////--}}
        <div class="d-flex justify-content-between">

         <div>
               <button type="button" class="btn btnColor btn-lg">Acheter</button>          {{--/////////////////////      Boutons      ///////////////////////////////////////////////////////--}}
               <button type="button" class="btn btn-secondary btn-lg">Fiche complète</button>
           </div>

            <div>
            <button  type="button" class="btn btnColor ">{{$cardProduct->price}} €</button>   {{--/////////////////       Prix produit      ///////////////////////////////////////////////////////--}}
            </div>
        </div>
        </div>
    </div>
</div><br>
</div>

@endforeach

@endsection
