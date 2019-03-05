@extends ('layout')

@section('content')

    <div class="panel panel-default col-md-8 center-div">
        <div class="panel-heading">
            <h2 class="panel-title">Editer la marque : {{ $brand->name }}</h2>
        </div>
        <div class="panel-body">
            <form class="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Brand name *</label>
                    <input type="text" class="form-control" name="name" value="{{$brand->name}}">
                </div>
                <div class="form-group">
                    <label for="title">Title de banner  *</label>
                    <input type="text" class="form-control" name="title" value="{{$brand->title}}">
                </div>
                <div class="form-group">
                    <label for="content">Subtitle de banner  *</label>
                    <input type="text" class="form-control" name="subtitle" value="{{$brand->subtitle}}">
                </div>
                <div class="form-group">
                    <label for="photo">Background image  *</label><br>
                    <img src="{{asset($brand->image)}}" width="300">
                    <input type="text" class="form-control mt-3" name="image_url" value="{{$brand->image}}">
                    <input type="file" name="image" class="form-control-file mt-3" id="image" >
                </div>
                <span>* Required</span><br>
                <button type="submit" class="btn btn-primary mt-5">Update</button>
            </form>
        </div>
    </div>

@endsection
