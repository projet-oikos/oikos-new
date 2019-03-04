@extends ('layout')

@section('content')

    <div class="panel panel-default col-md-8">
        <div class="panel-heading">
            <h2 class="panel-title">Ajouter une Marque</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/home" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Brand name</label>
                    <input type="text" class="form-control" name="name" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="title">Title de banner</label>
                    <input type="text" class="form-control" name="title" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="content">Subtitle de banner</label>
                    <textarea name="subtitle" id="content" class="form-control" rows="8" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label for="photo">Background image</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
