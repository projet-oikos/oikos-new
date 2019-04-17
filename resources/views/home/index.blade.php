@extends ('layout')

@section('content')

    <!-- We will create one brand banner with each brand for our home page -->
    @foreach($brands as $brand)

        <div class="content">
            <div class="col-md-12 productSlide" style="background-image: url({{ $brand->image }})">
                <div class="productName"><h2>{{ $brand->title }}</h2>
                    <h3>{{ $brand->subtitle }}</h3>
                </div>
            </div>
            <div class="productCollapse">
                <a class="btn boton" data-toggle="collapse" href="#collapseExample{{$brand->id}}" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    +
                </a>
                <div class="collapse homeProductCollapse" id="collapseExample{{$brand->id}}">
                    <!-- We will create the products for each brand for our home page -->


                    @foreach($brand->products()->get() as $product)
                        <div class="card card-body productHome col-sm-3">
                            <div class="homeProductTitle">{{$product->name}}</div>
                            <div class="homeProductPhoto"><img src="{{$product->image1}}" width="100%"></div>
                            <div class="row">
                                <div class="homeProductQty col-sm-6">Quantité : <input type="number" min="1"
                                                                                       max="{{$product->stock}}"
                                                                                       name="quantity" value="1"></div>
                                <div class="homeProductPrice col-sm-6">{{$product->price}} €</div>
                            </div>
                            <div class="homeProductButton">
                                <a href="/product/{{$product->id}}"><button class="btn btn-success">+ info</button></a>
                                <button class="btn btn-success"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach

@endsection