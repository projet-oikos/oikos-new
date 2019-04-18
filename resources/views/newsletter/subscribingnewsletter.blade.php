@extends("layout")

@section("content")



<div class="container">
    <div class="row">
        <div class="span12" style="margin: 40px auto;">
            <div class="thumbnail center well well-small text-center">
                <h2>Newsletter</h2>

                <p>Souscrivez à notre newsletter hebdo et restez au courant des nouveautés!</p>

                <form action="/merci" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input name="text" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                        </div>
                    </div>
                    <br />
                    <input type="submit" value="Subscribe Now!" class="btn btn-large" />
                </form>
            </div>
        </div>
    </div>
</div>

@endsection