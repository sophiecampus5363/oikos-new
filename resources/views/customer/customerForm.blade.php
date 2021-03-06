@extends ('layout')

@section('content')

    <form action="{{ url('accountCreated') }}" method="POST">
        {{ csrf_field() }}


    <div class="container">
        <table class="table table-striped">
            <tbody>
            <tr>
                <td colspan="1">
                    <form class="well form-horizontal" >
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-lg-center">Nom</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-address-card fa-2x"></i></span><input id="lastname" name="lastname" placeholder="Full Name" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-lg-center">Prénom</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-address-card fa-2x"></i></span><input id="name" name="name" placeholder="name" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-lg-center">Address de livraison</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-home fa-2x"></i></span><input id="delivery_address_id" name="delivery_address_id" placeholder="Address Line 1" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-lg-center">Address de facturation</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-home fa-2x"></i></span><input id="billing_address_id" name="billing_address_id" placeholder="Address Line 2" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-lg-center">Mot de passe</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-key fa-2x"></i></span><input id="password" name="password" placeholder="City" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-lg-center">Email</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-envelope fa-2x"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label text-lg-center">Numéro de téléphone</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-phone fa-2x"></i></span><input id="telephone" name="telephone" placeholder="Phone Number" class="form-control" required value="" type="number"></div>
                                </div>
                            </div>git status

                            <br>
                            <div class="d-flex justify-content-around">
                            <button type="submit" class="btn btn-success">Entrer</button>
                            </div>
                        </fieldset>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection