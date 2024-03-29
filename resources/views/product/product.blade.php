@extends ('layout')
@section ('content')

    <div class="container center">
        <h1>{{$product -> name}}</h1><br>                                                                                   <!-- Affiche le nom du product -->
            <div>
                <span class="heading">Note pour ce produit</span>

                <div class="d-flex justify-content-center selectNote" id="MoyStar" >
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <input type="hidden" id="average" value="{{$average}}"><!-- etoile -->
                <small class="text-muted">Moyenne établie sur : {{$nbReview}}  avis. </small>
                <script type="text/javascript">
                  averageStar();
                </script>
                <hr>
            </div>

            <div class="container">
            </div>

            <div class="col-lg-12">

                <div class="container">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-interval="false">      <!-- DEBUT CAROUSSEL -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="photo-1"></li>                    <!-- Creation du  SLIDE 1 -->
                                <li data-target="#carouselExampleCaptions" data-slide-to="photo-2"></li>                    <!-- Creation du  SLIDE 2 -->
                                <li data-target="#carouselExampleCaptions" data-slide-to="photo-3"></li>                    <!-- Creation du  SLIDE 3 -->
                                <li data-target="#carouselExampleCaptions" data-slide-to="photo-4"></li>                    <!-- Creation du  SLIDE 4 -->
                                <li data-target="#carouselExampleCaptions" data-slide-to="video-1"></li>                    <!-- Creation du  SLIDE 5 -->
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset($product -> image1)}}" class="image" alt="photo-1">                          <!-- Insert image1 dans 1 SLIDE PHOTO -->
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset($product -> image2)}}" class="image" alt="photo-2">                          <!-- Insert image2 dans 2 SLIDE PHOTO -->
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset($product -> image3)}}" class="image" alt="photo-3">                          <!-- Insert image3 dans 3 SLIDE PHOTO -->
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset($product -> image4)}}" class="image" alt="photo-4">                          <!-- Insert image4 dans 4 SLIDE PHOTO -->
                                </div>
                                <div class="carousel-item">
                                    <embed width="1100" height="600" src="{{$product -> video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>   <!-- Insert video dans 5 SLIDE VIDEO -->

                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon fleche-g" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next " href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon fleche-d" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>                                                                                              <!-- FIN CAROUSSEL -->
                    </div>
                    <div class="card-body">

                        <h4>€ {{$product -> price}}</h4><!-- affiche le prix du produit -->
                        <form action="/cart" method="post" enctype="multipart/form-data" class="mr-2">
                            {{csrf_field()}}
                            <div class="homeProductQty justify-content-center">Quantité : <input type="number" min="1"
                                                                                   max="{{$product->stock}}"
                                                                                   name="quantity" value="1"></div><br>
                            <input type="hidden" name="product" value="{{$product->id}}">
                            <button type="submit" class="btn btnColor btn-lg">Ajout Panier</button>                         <!-- Bouton ajout au panier -->



                        </form>

                    </div>
                </div>
                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        Description Produit
                    </div>
                    <div class="card-body">
                        <strong><p>{{$product -> description}}</p></strong>                                                 <!-- affiche la description du produit -->
                    </div>
                </div>
            </div>

        <div class="card-header">
            Avis Client
        </div>
             @foreach( $anyreview as $review)
            @if($product->id === $review->product_id)
            <div class="card-body">                                                                                      <!-- encart avis client / etoile / note -->
                <input type="hidden" class="star{{$review->id}}" value="{{$review->note}}">
                <p>{{$review -> review}}</p>                                                                            <!-- Affiche l'avis client -->
                <span class="heading">Note Client</span>

               <div class="d-flex justify-content-center selectNote{{$review->id}}" >                                   <!--on affiche les etoiles -->
                   <span class="fa fa-star"></span>
                   <span class="fa fa-star"></span>
                   <span class="fa fa-star"></span>
                   <span class="fa fa-star"></span>
                   <span class="fa fa-star"></span>
               </div>                                                                                                   <!--on lance le script qui remplit les etoiles -->
                <script type="text/javascript">
                    showStar({{$review->id}});
                </script>
                <small class="text-muted">Posté par : {{$review -> lastname.' '.$review -> name}} le {{$review -> date}}</small><!-- Affiche le prenom, le nom et la date de l'avis client -->
                <hr>
            </div>
            @endif
        @endforeach
        @can('create', \App\Review::class)                                                                              <!-- verifie que l'user esr logé pour aller sur le formulaire avis client -->
    <form method="post" action="/review">
        {{csrf_field()}}
        <input type="hidden" name="product" value="{{$product -> id}}">
        <button type="submit" class="btn colorBtn btn-lg end">Laisser un avis</button><br>
    </form>
        @endcan
    <div>
        <a target = "_blank" href="{{$product -> pdf}}" class="btn colorBtn btn-lg end">Fiche Technique (PDF)</a><br>   <!-- LIEN PDF vers fiche technique du produit -->
    </div>
    </div>
@endsection
