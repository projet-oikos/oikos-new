@extends ('layout')

@section('content')

    <div class="content col">
        <h1 class="text-center mt-5 mb-4">Pigeons de notre site</h1>
        <a href="{{action('CustomerController@createCustomer')}}" class="btn btn-success">créer un nouveau pigeon<i class="fas fa-plus-circle"></i></a>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm col-md-8 center-div mb-5" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Nom
                </th>
                <th class="th-sm">Prénom
                </th>
                <th class="th-sm">addresse de livraison
                </th>
                <th class="th-sm">addresse de facturation
                </th>
                <th class="th-sm">email
                </th>
                <th class="th-sm">téléphone
                </th>
                <th class="th-sm">mot de passe
                </th>
                <th class="th-sm">date de création
                </th>
                <th class="th-sm">dernière Maj
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($customer as $test)
                <tr>
                    <td>{{$test->lastname}}</td>
                    <td>{{$test->name}}</td>
                    <td>{{$test->delivery_address_id}}</td>
                    <td>{{$test->billing_address_id}}</td>
                    <td>{{$test->telephone}}</td>
                    <td>{{$test->created_at}}</td>
                    <td>{{$test->updated_at}}</td>
                    <td>{{$test->id}}</td>
                    <td class="text-center"> <a href="{{action('CustomerController@modifyCustomer', $test->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a></td>
                    <td class="text-center"> <a href="{{action('CustomerController@deleteCustomer', $test->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>2
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
































































