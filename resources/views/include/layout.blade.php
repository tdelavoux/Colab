<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{env('APP_NAME')}} - @yield('title_page')</title>
        <meta name="viewport"  content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{env('DIRLIB')}}favicon.png">
        <link rel="stylesheet" type="text/css" href="{{env('DIRLIB')}}fontawesome-5.13.0/css/all.css">
        <link rel="stylesheet" type="text/css" href="{{env('DIRLIB')}}bootstrap-4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{env('DIRLIB')}}css/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="{{env('DIRLIB')}}bootstrap-4.4.1/css/bootstrap-select.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        @yield('addCSS')

        </head>
    <body>

        @include('include.partials._navTop')

        <div id="content">
            @include('include.partials._navLeft')
            <div id="content-page">
                @yield('content')
            </div>
        </div>


        <script src="{{env('DIRLIB')}}jquery/jquery-3.5.1.min.js"></script>
        <script src="{{env('DIRLIB')}}js/notify.min.js"></script>
        <script src="{{env('DIRLIB')}}js/popper.min.js"></script>
        <script src="{{env('DIRLIB')}}bootstrap-4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{env('DIRLIB')}}js/datatables.min.js"></script>
        <script type="text/javascript" src="{{env('DIRLIB')}}js/formHandler.js"></script>
        <script type="text/javascript" src="{{env('DIRLIB')}}bootstrap-4.4.1/js/bootstrap-select.min.js"></script>
        @yield('addJS')

    </body>
</html>

