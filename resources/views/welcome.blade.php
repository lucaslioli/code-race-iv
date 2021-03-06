<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon"
          type="image/png"
          href="/img/GimmeGame_Symbol01.png">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
    <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
</head>
<body>

<div id="app">
    <home title="{{ config('app.name', 'GimmeGame') }}" >
        <router-view></router-view>
    </home>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>