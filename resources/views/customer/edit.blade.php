@extends ('layout')

@section('content')



    <form action="" method="POST">
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
                                                    class="form-control" required value="{{ $customer->lastname }}"
                                                    type="text"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label text-lg-center">Prénom</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                        class="fas customerForm fa-address-card fa-2x"></i></span><input
                                                    id="name" name="name" placeholder="name" class="form-control"
                                                    required value="{{ $customer->name }}" type="text"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label text-lg-center">Numéro de téléphone</label>
                                    <div class="col-md-8 inputGroupContainer">
                                        <div class="input-group"><span class="input-group-addon"><i
                                                        class="fas customerForm fa-phone fa-2x"></i></span><input
                                                    id="telephone" name="phone" placeholder="Phone Number"
                                                    class="form-control" required value="{{ $customer->phone }}"
                                                    type="text"></div>
                                    </div>
                                </div>

                                @foreach($customer->addresses()->get() as $address)

                                    <div class="form-group">
                                        <h2>Address n° {{$address->id}}</h2>
                                        <input type="hidden" value="{{$address->id}}">
                                        <label class="col-md-4 control-label text-lg-center">N°</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                            class="fas customerForm fa-home fa-2x"></i></span><input
                                                        id="delivery_address_id" name="number{{$address->id}}"
                                                        placeholder="Address Line 1" class="form-control" required
                                                        value="{{ $address->number }}" type="text"></div>
                                        </div>
                                        <label class="col-md-4 control-label text-lg-center">address</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                            class="fas customerForm fa-home fa-2x"></i></span><input
                                                        id="delivery_address_id" name="address{{$address->id}}"
                                                        placeholder="Address Line 1" class="form-control" required
                                                        value="{{ $address->address }}" type="text"></div>
                                        </div>
                                        <label class="col-md-4 control-label text-lg-center">complement</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                            class="fas customerForm fa-home fa-2x"></i></span><input
                                                        id="delivery_address_id" name="complement{{$address->id}}"
                                                        placeholder="Address Line 1" class="form-control"
                                                        value="{{ $address->complement }}" type="text"></div>
                                        </div>
                                        <label class="col-md-4 control-label text-lg-center">nap</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                            class="fas customerForm fa-home fa-2x"></i></span><input
                                                        id="delivery_address_id" name="nap{{$address->id}}" placeholder="Address Line 1"
                                                        class="form-control" required value="{{ $address->nap }}"
                                                        type="text"></div>
                                        </div>
                                        <label class="col-md-4 control-label text-lg-center">city</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                            class="fas customerForm fa-home fa-2x"></i></span><input
                                                        id="delivery_address_id" name="city{{$address->id}}"
                                                        placeholder="Address Line 1" class="form-control" required
                                                        value="{{ $address->city }}" type="text"></div>
                                        </div>
                                        <label class="col-md-4 control-label text-lg-center">country</label>
                                        <div class="col-md-8 inputGroupContainer">
                                            <div class="input-group"><span class="input-group-addon"><i
                                                            class="fas customerForm fa-home fa-2x"></i></span><input
                                                        id="delivery_address_id" name="country{{$address->id}}"
                                                        placeholder="Address Line 1" class="form-control" required
                                                        value="{{ $address->country }}" type="text"></div>
                                        </div>
                                    </div>
                                @endforeach


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

@endsection