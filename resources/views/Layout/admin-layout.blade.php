<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perusahaan Payung | {{ $title }}</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/login.scss') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/application.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/getmdl-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/nv.d3.min.css') }}">
    <!-- endinject -->

</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    @include('Components.header')

    @include('Components.drawer')

    <main class="mdl-layout__content">

        @yield('konten')

    </main>

</div>

<!-- inject:js -->
<script src="{{ URL::asset('js/d3.min.js') }}"></script>
<script src="{{URL::asset('js/getmdl-select.min.js')}}"></script>
<script src="{{URL::asset('js/material.min.js')}}"></script>
<script src="{{URL::asset('js/nv.d3.min.js')}}"></script>
<script src="{{URL::asset('js/layout/layout.min.js')}}"></script>
<script src="{{URL::asset('js/scroll/scroll.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/charts/discreteBarChart.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/charts/linePlusBarChart.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/charts/stackedBarChart.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/employer-form/employer-form.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/line-chart/line-charts-nvd3.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/map/maps.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/pie-chart/pie-charts-nvd3.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/table/table.min.js')}}"></script>
<script src="{{URL::asset('js/widgets/todo/todo.min.js')}}"></script>
<!-- endinject -->

</body>
</html>