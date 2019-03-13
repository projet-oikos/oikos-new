@extends ('layout')
@section ('content')
    <h1 class="container center ">Modifier le produit</h1>

    {{--{{dd($product->brand_id)}}--}}
    {{--{{dd($product->product_id)}}--}}
    <form method="POST" action="/product/{{$product->id}}/edit" enctype=multipart/form-data>

        {{ csrf_field() }}

        <div class="form-group col-lg-6 container">
            <select class="form-control" name="brand" id="exampleFormControlSelect1">
                    <option value="{{$product->brand_id}}">{{$product->brand->name}}</option>
            </select>

        </div>

        <div class="form-group col-lg-6 container">
            <div><label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" name="name"
                       value="{{$product->name}}"> {{-- Nom du produit --}}
            </div>

            <div><label for="formGroupExampleInput">Price</label> {{-- Prix du produit --}}
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="photo">Photo '1' pour le carousselle</label><br>
                <img src="{{asset($product->image1)}}" width="150">
                <input type="text" class="form-control mt-3" name="image_url" value="{{$product->image1}}">
                <input type="file" name="image1" class="form-control-file" id="image1">
            </div>

            <div class="form-group">
                <label for="photo">Photo '2' pour le carousselle</label><br>
                <img src="{{asset($product->image2)}}" width="150">
                <input type="text" class="form-control mt-3" name="image_url" value="{{$product->image2}}">
                <input type="file" name="image2" class="form-control-file" id="image2">
            </div>

            <div class="form-group">
                <label for="photo">Photo '3' pour le carousselle</label><br>
                <img src="{{asset($product->image3)}}" width="150">
                <input type="text" class="form-control mt-3" name="image_url" value="{{$product->image3}}">
                <input type="file" name="image3" class="form-control-file" id="image3">
            </div>

            <div class="form-group">
                <label for="photo">Photo '4' pour le carousselle</label><br>
                <img src="{{asset($product->image4)}}" width="150">
                <input type="text" class="form-control mt-3" name="image_url" value="{{$product->image4}}">
                <input type="file" name="image4" class="form-control-file" id="image4">
            </div>

            <div><label for="formGroupExampleInput">Video</label><br>
                <input type="text" class="form-control" name="video"
                       value="{{$product->video}}"> {{-- Lien pour la video du carousselle --}}
            </div>

            <div><label for="formGroupExampleInput">Description</label>
                <textarea type="text" class="form-control" name="description"
                          value="">{{$product->description}}</textarea> {{-- Description du produit --}}
            </div>

            <div><label for="formGroupExampleInput">Lien PDF</label>
                <input type="text" class="form-control" name="pdf"
                       value="{{$product->pdf}}"> {{-- Lien fiche technique en pdf --}}
            </div>

            <div><label for="formGroupExampleInput">Stock</label>
                <input type="number" class="form-control" name="stock"
                       value="{{$product->stock}}"> {{-- on increment le stock du produit  --}}
            </div>

            <div><label for="formGroupExampleInput">Poids</label>
                <input type="number" class="form-control" name="weight"
                       value="{{$product->weight}}"> {{-- on increment le poids du produit  --}}
            </div>


            <div><label for="formGroupExampleInput">Category</label>
                <input type="text" class="form-control" name="category"
                       value="{{$product->category}}"><br> {{-- On choisi la categorie du produit  --}}
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn colorBtn btn-lg end" type="submit">Modifier produit</button>
                </button> {{-- Boutton pour ajouter --}}
            </div>
        </div>


    </form>
@endsection