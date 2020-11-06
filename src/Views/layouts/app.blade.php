<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Confraria Web">
    <meta name="author" content="Rafael Zingano">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('vendor/confrariaweb/template-milo/css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('templateMilo::partials.header')
<main class="main pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3 ml-auto">
                @include('templateMilo::partials.sidebar')
            </div>
        </div>
    </div>
</main>
@include('templateMilo::partials.newsletter')
@include('templateMilo::partials.instagram')
@include('templateMilo::partials.footer')
<script src="{{ asset('vendor/confrariaweb/template-milo/js/app.js') }}"></script>
</body>
</html>
