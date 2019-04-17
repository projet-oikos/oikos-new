@extends("layout")

@section("content")


    <div class="jumbotron text-xs-center">
        <h1 class="display-3">Merci</h1>
        <p class="lead">Nous vous avons envoyé un email de confirmation </p>
        <hr>
        <p>
            Un souci? <a href="">Contactez-nous</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{url('/')}}" role="button">Retourner à l'accueil</a>
        </p>
    </div>


@endsection