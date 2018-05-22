<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta name="msapplication-TileColor" content="#071a31">
    <meta name="theme-color" content="#071a31">
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    @yield('metaSocial')
    <title>@yield('title') {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}?={{ rand() }}" />
  </head>
  <body id="body-app">
    <main id="app">
      @yield('content')
    </main>
    @include('layouts.footer')
    <script src="{!! asset('js/app.js') !!}?={{ rand() }}"></script>
  </body>
</html>
