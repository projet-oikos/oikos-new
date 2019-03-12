@extends ('layout')
@section ('content')

    <div class="content col">
        <h1 class="text-center mt-5 mb-4">Produit de notre website</h1>
        <a href="{{action('ProductController@createProduct')}}" class="btn btn-success">Creer un nouveau produit<i class="fas fa-plus-circle"></i></a>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm col-md-8 center-div mb-5" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Price
                    </th>
                    <th class="th-sm">Image1
                    </th>
                    <th class="th-sm">Image2
                    </th>
                    <th class="th-sm">Image3
                    </th>
                    <th class="th-sm">Image4
                    </th>
                    <th class="th-sm">Video
                    </th>
                    <th class="th-sm">Description
                    </th>
                    <th class="th-sm">Pdf
                    </th>
                    <th class="th-sm">Stock
                    </th>
                    <th class="th-sm">Poids
                    </th>
                    <th class="th-sm">Category
                    </th>
                    <th class="th-sm">Action
                    </th>
                </tr>
            </thead>
            <tbody>

            @foreach($anyProduct as $product)
                <p>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    @for($i=1; $i<5;$i++)
                        <td>
                            {{$imagen = 'image'.$i}}
                            <img src="{{asset($product->$imagen)}}" width="100">
                        </td>
                    @endfor
                    <td>{{$product->video}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->pdf}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->weight}}</td>
                    <td>{{$product->category}}</td>
                    <td class="text-center align-middle"> <a href="{{action('ProductController@editProduct', $product->id, $product->brand_id)}}" class="btn btn-info mb-3"><i class="fas fa-edit"></i></a>   <a href="{{action('ProductController@destroyProduct', $product->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection