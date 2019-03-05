@extends ('layout')

@section('content')

    <form action="{{ url('accountCreated') }}" method="POST">
    {{ csrf_field() }}


        <body>

        @foreach($anyCustomer as $customer)
            <div class="post-container">
                <h3>
                    <a href="{{ URL::action('CustomerController@view', $customer->id) }}">{{ $customer->lastname}}, {{ $customer->name}}</a>
                </h3>
                <p>{{ $customer->email }}</p>
                <i>{{ $customer->telephone }}</i>
                <i>{{ $customer->password }}</i>
                <i>{{ $customer->delivery_address_id }}</i>
                <i>{{ $customer->billing_address_id}}</i>
                <i>{{ $customer->created_at}}</i>
                <i>{{ $customer->update_at}}</i>
            </div>

        @endforeach


        </body>

@endsection