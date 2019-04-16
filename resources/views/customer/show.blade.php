@extends ('layout')

@section('content')

    <h1>{{ $customer->name }} {{ $customer->lastname }} {{$customer->id}} {{$customer->delivery_address_id}}
        {{$customer->billing_address_id}}</h1>


@endsection