@extends("layout")

@section("content")

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contactez-nous <br/> <small>Une question? Un mot doux?</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container texte ">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="POST" action="/contact">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                   Prénom Nom </label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Prénom Nom" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Adresse email</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Sujet</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choisir:</option>
                                    <option value="service">Service client</option>
                                    <option value="suggestions">Suggestions</option>
                                    <option value="product">Service après-vente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Message</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

            </form>
        </div>
    </div>
</div>
@endsection



