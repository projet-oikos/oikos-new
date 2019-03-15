@extends ('layout')

@section('content')

@foreach($customers as $customer)

    <div class="content">
        <p>{{ $customer->lastname }} {{ $customer->name }} <a href="/customerForm/{{$customer->id}}" class="btn btn-primary">Modifier</a></p>
        <hr>
    </div>
@endforeach

@endsection
