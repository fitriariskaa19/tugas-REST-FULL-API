<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perusahaan Payung</title>

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
    <link rel="stylesheet" href="{{ URL::asset('css/login.scss') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/application.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/getmdl-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/lib/nv.d3.min.css') }}">
    <!-- endinject -->

</head>
<body>

<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <div class="mdl-card__supporting-text color--dark-gray">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">Perusahaan Payung</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="login-name text-color--white">Sign in</span>
                            <span class="login-secondary-text text-color--smoke">Enter fields to sign in to Perusahaan Payung</span>
                        </div>
                        <form action="/login" method="POST">
                        @csrf
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <input class="mdl-textfield__input" type="text" name="email" id="e-mail">
                                    <label class="mdl-textfield__label" for="e-mail">Email</label>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                    <input class="mdl-textfield__input" type="password" name="password" id="password">
                                    <label class="mdl-textfield__label" for="password">Password</label>
                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                                    <button class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                        SIGN IN
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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