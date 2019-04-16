<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link  href="{{asset('js/imageviewer/dist/viewer.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/about_us.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/clement.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/catalog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css\customerForm.css')}}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    @stack('style')


</head>

<body>
@include("header_oikos")

@include("navbar")


@yield("content")


@include("footer_oikos")

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
<script src="{{asset('js/imageviewer/dist/viewer.js')}}"></script>
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>
