<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bulletin Board @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
    <link href={{ asset('/css/bootstrap.min.css')}} rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

</head>
<body>
<header>
    @section ('header')
        @include('layouts.widgets.header')
    @show
</header>

<main>
    @yield('content')
</main>

<!-- Bootstrap And JS -->
<script src="{{ asset('/js/jquery.min.js')}}"></script>
<script src="{{ asset('libs/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('/js/jquery.inputmask.bundle.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
<script src="{{ asset('/js/script.js')}}"></script>
@yield('scripts')
<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>
