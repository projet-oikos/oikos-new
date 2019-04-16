@extends ('layout')

@section('content')

    <div class="content col my-2">

        <h1 class="text-center mt-5 mb-4">Pigeons de notre site</h1>
        <a href="{{action('CustomerController@create')}}" class="btn btn-success mb-5">créer un nouveau pigeon<i class="fas fa-plus-circle"></i></a>

        <table id="customer"  >
            <thead>
            <tr>
                <th>Nom
                </th>
                <th>Prénom
                </th>
                <th>téléphone
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($customers as $test)
                <tr>
                    <td>{{$test->lastname}}</td>
                    <td>{{$test->name}}</td>
                    <td>{{$test->phone}}</td>


                </tr>
            @endforeach
            </tbody>

        </table>


    </div>

@endsection