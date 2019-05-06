@extends ('layout')
@if(isset($customer))
    @foreach($customer as $pelo)
        <i class="text-hide">
            {{$id = $pelo->id}}
            {{$name = $pelo->name}}
            {{$lastname = $pelo->lastname}}
            {{$dai = $pelo->delivery_address_id}}
            {{$bai = $pelo->billing_address_id}}
        </i>
    @endforeach
@else
    {{$id = ''}}
    {{$name = ''}}
    {{$lastname = ''}}
    {{$dai = ''}}
    {{$bai = ''}}
@endif
@section('content')

    <form action="{{ url('create') }}" method="POST">
        {{ csrf_field() }}


        <div class="container">
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td colspan="1">
                        <form class="well form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-4 control-label text-lg-center">Nom</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                        class="fas customerForm fa-address-card fa-2x"></i></span><input
                                                    id="lastname" name="lastname" placeholder="Full Name"
                                                    class="form-control" required value="" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label text-lg-center">Prénom</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                        class="fas customerForm fa-address-card fa-2x"></i></span><input
                                                    id="name" name="name" placeholder="name" class="form-control"
                                                    required value="" type="text"></div>
                                    </div>
                                </div>
                                <label class="col-md-4 control-label text-lg-center">address</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas customerForm fa-home fa-2x"></i></span><input
                                                id="delivery_address_id" name="address"
                                                placeholder="Address Line 1" class="form-control" required
                                                value="" type="text"></div>
                                </div>
                                <label class="col-md-4 control-label text-lg-center">Numéro de rue</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas customerForm fa-home fa-2x"></i></span><input
                                                 name="number"
                                                placeholder="rien bitch" class="form-control"
                                                value="" type="text"></div>
                                </div>
                                <label class="col-md-4 control-label text-lg-center">complement</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas customerForm fa-home fa-2x"></i></span><input
                                                id="delivery_address_id" name="complement"
                                                placeholder="Address Line 1" class="form-control"
                                                value="" type="text"></div>
                                </div>
                                <label class="col-md-4 control-label text-lg-center">nap</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas customerForm fa-home fa-2x"></i></span><input
                                                id="delivery_address_id" name="nap"
                                                placeholder="Address Line 1"
                                                class="form-control" required value=""
                                                type="text"></div>
                                </div>
                                <label class="col-md-4 control-label text-lg-center">city</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas customerForm fa-home fa-2x"></i></span><input
                                                id="delivery_address_id" name="city"
                                                placeholder="Address Line 1" class="form-control" required
                                                value="" type="text"></div>
                                </div>
                                <label class="col-md-4 control-label text-lg-center">country</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                    class="fas customerForm fa-home fa-2x"></i></span><input
                                                id="delivery_address_id" name="country"
                                                placeholder="Address Line 1" class="form-control" required
                                                value="" type="text"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label text-lg-center">Numéro de téléphone</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                        class="fas customerForm fa-phone fa-2x"></i></span><input
                                                    id="telephone" name="telephone" placeholder="Phone Number"
                                                    class="form-control" required value="" type="number"></div>
                                    </div>
                                </div>

                                <br>
                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-success">Entrer</button>
                                </div>
                                <br>
                            </fieldset>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </form>

@endsection