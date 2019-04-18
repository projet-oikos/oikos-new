@extends ('layout')
@section ('content')
    <h1 class="container center ">Formulaire avis client</h1>

    <h2>Ajout Produit</h2>

    <form method="POST" action="/formProduct">

        {{ csrf_field() }}

        <div class="form-group col-lg-6 container">
            <select class="form-control" name="brand">
                @foreach($anybrand as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="form-group col-lg-6 container">
            <div><label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" name="name"
                       placeholder="Nom du produit"> {{-- Nom du produit --}}
            </div>

            <div><label for="formGroupExampleInput">Price</label> {{-- Prix du produit --}}
                <input type="text" class="form-control" name="price" placeholder="Prix du produit">
            </div>

            <div class="form-group">
                <label for="photo">Photo '1' pour le carousselle</label>
                <input type="file" name="image1" class="form-control-file" id="image">
            </div>

            <div class="form-group">
                <label for="photo">Photo '2' pour le carousselle</label>
                <input type="file" name="image2" class="form-control-file" id="image">
            </div>

            <div class="form-group">
                <label for="photo">Photo '3' pour le carousselle</label>
                <input type="file" name="image3" class="form-control-file" id="image">
            </div>

            <div class="form-group">
                <label for="photo">Photo '4' pour le carousselle</label>
                <input type="file" name="image4" class="form-control-file" id="image">
            </div>

            <div><label for="formGroupExampleInput">Video</label>
                <input type="text" class="form-control" name="video"
                       placeholder="Video pour le carousselle"> {{-- Lien pour la video du carousselle --}}
            </div>

            <div><label for="formGroupExampleInput">Description</label>
                <textarea type="text" class="form-control" name="description"
                          placeholder="Description produit"></textarea> {{-- Description du produit --}}
            </div>

            <div><label for="formGroupExampleInput">Lien PDF</label>
                <input type="text" class="form-control" name="pdf"
                       placeholder="Lien PDF  pour fiche technique"> {{-- Lien fiche technique en pdf --}}
            </div>

            <div><label for="formGroupExampleInput">Stock</label>
                <input type="number" class="form-control" name="stock"
                       placeholder="Valeur du stock"> {{-- on increment le stock du produit  --}}
            </div>

            <div><label for="formGroupExampleInput">Poids</label>
                <input type="number" class="form-control" name="weight"
                       placeholder="Poids du produit"> {{-- on increment le poids du produit  --}}
            </div>


            <div><label for="formGroupExampleInput">Category</label>
                <input type="text" class="form-control" name="category"
                       placeholder="Categorie du produit"><br> {{-- On choisi la categorie du produit  --}}
            </div>

            <div class="d-flex justify-content-between">
                <button class="btn colorBtn btn-lg end" type="submit">Creer</button>
                <button class="btn colorBtn btn-lg end" type="submit">Modifier</button>
                <button class="btn colorBtn btn-lg end" type="submit">Supprimer</button> {{-- Boutton pour ajouter / modifier / supprimer --}}
            </div>
        </div>


    </form>
@endsection