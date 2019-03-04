@extends ('layout')

@section('content')

    <!-- We will create one brand banner with each brand for our home page -->

    <div class="content col">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm col-md-8 center-div" cellspacing="0" width="100%">
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
                    <td>{{$brand->image}}</td>
                    <td><a href="{{action('HomeController@edit', $brand->id)}}" class="btn btn-info">Edit</a>      <a href="{{action('HomeController@edit', $brand->id)}}" class="btn btn-info">Suprimer</a></td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
