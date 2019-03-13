@extends ('layout')
@section ('content')
    <h1 class="container center ">Ajout d'un Produit</h1>

    <form method="POST" action="/productList" enctype="multipart/form-data">

        {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group col-lg-6 container"><i class="fas fa-store fa-2x"></i> <label> Marques</label>
            <select class="form-control" name="brand" id="exampleFormControlSelect1">
                @foreach($anybrand as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-lg-6 container">
            <div><i class="fas fa-address-card fa-2x"></i> <label for="formGroupExampleInput"> Name</label>
                <input type="text" class="form-control" name="name"
                       placeholder="Nom du produit"> {{-- Nom du produit --}}
            </div><br>

            <div><i class="far fa-money-bill-alt fa-2x"></i> <label for="formGroupExampleInput"> Price</label> {{-- Prix du produit --}}
                <input type="text" class="form-control" name="price" placeholder="Prix du produit">
            </div><br>

            <div class="form-group">
                <i class="fas fa-image fa-2x"></i> <label for="photo">Photo '1' pour le carousselle</label>
                <input type="file" name="image1" class="form-control-file" id="image">
            </div><br>

            <div class="form-group">
                <i class="fas fa-image fa-2x"></i> <label for="photo">Photo '2' pour le carousselle</label>
                <input type="file" name="image2" class="form-control-file" id="image">
            </div><br>

            <div class="form-group">
                <i class="fas fa-image fa-2x"></i> <label for="photo">Photo '3' pour le carousselle</label>
                <input type="file" name="image3" class="form-control-file" id="image">
            </div><br>

            <div class="form-group">
                <i class="fas fa-image fa-2x"></i> <label for="photo">Photo '4' pour le carousselle</label>
                <input type="file" name="image4" class="form-control-file" id="image">
            </div><br>

            <div><i class="fas fa-video fa-2x"></i> <label for="formGroupExampleInput">Video</label>
                <input type="text" class="form-control" name="video"
                       placeholder="Video pour le carousselle"> {{-- Lien pour la video du carousselle --}}
            </div><br>

            <div><i class="fas fa-file-signature fa-2x"></i> <label for="formGroupExampleInput">Description</label>
                <textarea type="text" class="form-control" name="description"
                          placeholder="Description produit"></textarea> {{-- Description du produit --}}
            </div><br>

            <div><i class="fas fa-file-pdf fa-2x"></i> <label for="formGroupExampleInput">Lien PDF</label>
                <input type="text" class="form-control" name="pdf"
                       placeholder="Lien PDF  pour fiche technique"> {{-- Lien fiche technique en pdf --}}
            </div><br>

            <div><i class="fab fa-stack-overflow fa-2x"></i> <label for="formGroupExampleInput">Stock</label>
                <input type="number" class="form-control" name="stock"
                       placeholder="Valeur du stock"> {{-- on increment le stock du produit  --}}
            </div><br>

            <div><i class="fas fa-weight fa-2x"></i> <label for="formGroupExampleInput">Poids</label>
                <input type="number" class="form-control" name="weight"
                       placeholder="Poids du produit"> {{-- on increment le poids du produit  --}}
            </div><br>


            <div><i class="fas fa-boxes fa-2x"></i> <label for="formGroupExampleInput">Category</label>
                <input type="text" class="form-control" name="category"
                       placeholder="Categorie du produit"><br> {{-- On choisi la categorie du produit  --}}
            </div><br>

            <div class="d-flex justify-content-center">
                <button class="btn colorBtn btn-lg end" type="submit">Ajouter produit</button>
                </button> {{-- Boutton pour ajouter --}}
            </div>
        </div>


    </form>
@endsection