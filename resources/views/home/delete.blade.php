@extends ('layout')

@section('content')

    <form method="post" action="{{action('HomeController@destroy', $brand->id)}}" class="pull-left">
        {{ csrf_field() }}
        <div>
            <button type="submit" class="btn btn-warning">Delete</button>
        </div>
    </form>


@endsection
