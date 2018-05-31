<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="/images/favicon/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#8d8d8d">
    <meta name="apple-mobile-web-app-title" content="Hackathon Monteria">
    <meta name="application-name" content="Hackathon Monteria">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    @yield('metaSocial')
    <title>@yield('title') {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta name="google-site-verification" content="fqlCZH84OmQIlveaaX1_HiWYCi-q331dB4ninqpp_ZA" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98450577-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-98450577-3');
    </script>
  </head>
  <body id="body-app">
    <main id="app">
      @yield('content')
    </main>
    @include('layouts.footer')
    <script src="{!! asset('js/app.js') !!}"></script>
  </body>
</html>
