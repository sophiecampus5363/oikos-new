@extends("layout")

@section("content")
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">PANIER</h1>
        </div>
    </section>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produit</th>
                            <th scope="col">Disponibilité</th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-right">Prix</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cart as $product)


                        <tr>
                            <td><img class="img-product" src="{{asset($product->image1)}}" /> </td>
                            <td>{{$product->name}}</td>
                            <td>En Stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">{{$product->price}}</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>

                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total HT</td>
                            <td class="text-right"> €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Livraison</td>
                            <td class="text-right"> €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>TVA</td>
                            <td class="text-right"> €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong> €</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn btn-block btn-light">Continuer mes achats</button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Payer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection