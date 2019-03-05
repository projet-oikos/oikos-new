@extends ('layout')

@section('content')

    <!-- We will create one brand banner with each brand for our home page -->

    <div class="content col">
        <h1 class="text-center mt-5 mb-4">Marques dans notre website</h1>
        <a href="{{action('HomeController@create')}}" class="btn btn-success">Create une nouvelle marque<i class="fas fa-plus-circle"></i></a>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm col-md-8 center-div mb-5" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Title
                </th>
                <th class="th-sm">Subtitle
                </th>
                <th class="th-sm">Image
                </th>
                <th class="th-sm">Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->title}}</td>
                    <td>{{$brand->subtitle}}</td>
                    <td><img src="{{asset($brand->image)}}" width="300"></td>
                    <td class="text-center"> <a href="{{action('HomeController@edit', $brand->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>      <a href="{{action('HomeController@destroy', $brand->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
