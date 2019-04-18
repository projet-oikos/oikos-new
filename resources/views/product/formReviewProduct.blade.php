@extends ('layout')

@section ('content')

    <form action="/userReview" method="POST" enctype="multipart/form-data" class="content m-5">
        {{ csrf_field() }}
    @foreach($product as $valueProduct)
    <div class="form-group">
    <label for="Votre avis sur ce produit">Avis sur {{$valueProduct -> name}}</label>
        <textarea name="guestReview" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Avis ..."></textarea>
    <small id="emailHelp" class="form-text text-muted">Merci de nous communiquer votre retour sur ce produit.</small>
  </div><br>
        <input type="hidden" name="product_id" value="{{$valueProduct ->id}}">

    @endforeach


  <div class="con"><br>
      <i class="fa fa-star" aria-hidden="true" id="s1" data-id="1"></i>
      <i class="fa fa-star" aria-hidden="true" id="s2" data-id="2"></i>
      <i class="fa fa-star" aria-hidden="true" id="s3" data-id="3"></i>
      <i class="fa fa-star" aria-hidden="true" id="s4" data-id="4"></i>
      <i class="fa fa-star" aria-hidden="true" id="s5" data-id="5"></i>
  </div><br>
        <input  type="submit" class="justify-content-center btn colorBtn btn-lg end " value="Valider">
    </form>
@endsection