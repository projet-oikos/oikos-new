<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about_us')}}">Qui sommes-nous?</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Produits
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{url('/catalog')}}">Catalogue général</a>
                    <a class="dropdown-item" href="#">Eau</a>
                    <a class="dropdown-item" href="#">Chauffage</a>
                    <a class="dropdown-item" href="#">Electricité</a>
                    <a class="dropdown-item" href="#">Nourriture</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Best-seller</a>
                </div>
            </li>
            @can('create',\App\Brand::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/brand/brandlist')}}">Marques</a>
                </li>
            @endcan

            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
            @can('create', \App\Product::class)
            <li class="nav-item">
                <a class="nav-link" href="{{url('/productList')}}">Gestion des produits</a>
            </li>
            @endcan
        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user"
                                                                       style="width: 15px; height: 0px"></i> {{ __('Login') }}
                    </a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">|  <i class="fas fa-user-plus"
                                                                              style="width: 17px; height: 0px"></i> {{ __('Register') }}
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
    </li>
    @endguest
    <li class="nav-item"><a href="panier" class="nav-link">|  <i class="fas fa-shopping-cart"></i>   Panier</a></li>

    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
     </form> -->
    </div>
</nav>