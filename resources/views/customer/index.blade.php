@extends ('layout')

@section('content')

    <div class="content col">
        <h1 class="text-center mt-5 mb-4">Pigeons de notre site</h1>
        <a href="{{action('CustomerController@create')}}" class="btn btn-success">créer un nouveau pigeon<i class="fas fa-plus-circle"></i></a>

        <table id="dtBasicExample" class="table table-striped table-bordered table-sm col-md-8 center-div mb-5" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nom
                </th>
                <th class="th-sm">Prénom
                </th>
                <th class="th-sm">téléphone
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($customers as $test)
                <tr>
                    <td>{{$test->lastname}}</td>
                    <td>{{$test->name}}</td>
                    <td>{{$test->phone}}</td>

                    <td class="text-center"> <a href="{{action('CustomerController@edit', $test->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a></td>

                    <td class="text-center"> <a href="{{action('CustomerController@delete', $test->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection