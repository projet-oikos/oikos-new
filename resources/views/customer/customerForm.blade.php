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
                                <label class="col-md-4 control-label">Nom</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-address-card"></i></span><input id="lastname" name="lastname" placeholder="Full Name" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Prénom</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-address-card"></i></span><input id="name" name="name" placeholder="name" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address de livraison</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="fas fa-home"></i></i></span><input id="delivery_address_id" name="delivery_address_id" placeholder="Address Line 1" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address de facturation</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="billing_address_id" name="billing_address_id" placeholder="Address Line 2" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Mot de passe</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-key"></i></span><input id="password" name="password" placeholder="City" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control" required value="" type="text"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Numéro de téléphone</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="telephone" name="telephone" placeholder="Phone Number" class="form-control" required value="" type="number"></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Entrer</button>
                        </fieldset>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection