@extends ('layout')
@section ('content')

@foreach($anyproduct as $product)
<div class="container center">
    <h1>{{$product -> name}}</h1><br>                                                                                   <!-- Affiche le nom du product -->

    <div>

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
                                <img src="{{asset($product->image1)}}" class="image" alt="photo-1">                          <!-- Insert image1 dans 1 SLIDE PHOTO -->
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

                    <h4>€ {{$product -> price}}</h4>                                                                    <!-- affiche le prix du produit -->
                    <a href="#" class="btn colorBtn btn-lg">Ajout Panier</a>                                            <!-- Bouton ajout au panier -->
                </div>
            </div>
            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Description Produit
                </div>
                <div class="card-body">
                    <strong><p>{{$product -> description}}</p></strong>                                                 <!-- affiche la description du produit -->
                    <hr>
@endforeach


                        <div class="card-header">
                            Avis Client
                        </div>
                    @foreach($product->reviews()->get() as $review)
                        <div class="card-body">                                                                         <!-- encart avis client / etoile / note -->
                            <p>{{$review -> review}}</p>                                                                <!-- Affiche l'avis client -->
                            <span class="heading">Note Client</span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <p>Note de {{$review -> note}}  basée sur  {{$review -> id}}  avis.</p>                     <!-- Affiche la note de l'avis client -->
                            <small class="text-muted">Posté par Marcel le . {{$review -> date}}</small>                 <!-- Affiche la date de l'avis client -->
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>

            <a target = "_blank" href="{{$product ->pdf}}" class="btn colorBtn btn-lg end">Fiche Technique (PDF)</a><br>                  <!-- LIEN PDF vers fiche technique du produit -->

        </div>

    </div>

<!-- Fin de boucle froeach -->
    <h3>Laisser un avis</h3>
    @if ($errors->any())
        <div class="alert alert-danger d-flex justify-content-center align-items-center">

            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        </div>
    @endif
    <form method="POST" action="/product/{{$product->id}}" enctype="multipart/form-data">

        {{ csrf_field() }}


        <div>
            <label>Votre avis</label>

            <textarea type="text" name="review" ></textarea>
        </div>

        <div>
            <label>Votre Note</label>

            <select name="note" >
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

        </div>


        <div>
            <input type="hidden" name="id" value="{{$product->id}}">
            <button type="submit">Envoyé mon avis</button>
        </div>
    </form>
</div>
    <script src="{{asset('js/app.js')}}" crossorigin="anonymous"></script>                                              <!-- SRIPT ??? -->
    <script src="{{asset('js/bootstrap.js')}}" crossorigin="anonymous"></script>                                        <!-- SCRIPT JAVA BOOTSTRAP -->
@endsection
