@extends ('layout')
@section ('content')
<h1>Formulaire avis client</h1>

<h2>{{ $Reviewt() }}</h2>

<form method="POST" action="/forms">

    {{ csrf_field() }}

    <div>
        <input type="text" name="review" placeholder="Form review">
    </div>

    <div>
        <textarea type="text" name="review" placeholder="Form review"></textarea>
    </div>

    <div>
        <button type="submit">Create form</button>
    </div>
</form>
@endsection