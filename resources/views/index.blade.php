<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{asset('js/app.js')}}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }


        </style>
    </head>
    <body>
        <div id="app"> </div>
    </body>
</html>
