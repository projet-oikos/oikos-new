@extends("layout")

@section("content")


<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="thumbnail center well well-small text-center">
                <h2>Newsletter</h2>

                <p>Souscrivez à notre newsletter hebdo et restez au courant des nouveautés!</p>

                <form action="/merci" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                        <input type="text" id="email" name="email" placeholder="your@email.com">
                    </div>
                    <br />
                    <input type="submit" value="Subscribe Now!" class="btn btn-large" />
                </form>
            </div>
        </div>
    </div>
</div>

@endsection