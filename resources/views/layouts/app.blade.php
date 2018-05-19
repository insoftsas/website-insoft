<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta name="msapplication-TileColor" content="#5dc1b9">
    <meta name="theme-color" content="#5dc1b9">
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    @yield('metaSocial')
    <title>@yield('title') {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}?={{ rand() }}" />
  </head>
  <body>
    <main id="app">
      <div class="content-menu-icon">
        <transition name="slide-fade">
          <svg class="menu-bar" version="1.1" @click="$root.handleMenu" v-if="!$root.show_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 294.843 294.843" style="enable-background:new 0 0 294.843 294.843;" xml:space="preserve">
          	<g fill="#fff">
          		<path d="M84.185,90.185h126.473c3.313,0,6-2.687,6-6s-2.687-6-6-6H84.185c-3.313,0-6,2.687-6,6S80.872,90.185,84.185,90.185z"/>
          		<path d="M84.185,153.421h126.473c3.313,0,6-2.687,6-6s-2.687-6-6-6H84.185c-3.313,0-6,2.687-6,6S80.872,153.421,84.185,153.421z"/>
          		<path d="M216.658,210.658c0-3.313-2.687-6-6-6H84.185c-3.313,0-6,2.687-6,6s2.687,6,6,6h126.473
          			C213.971,216.658,216.658,213.971,216.658,210.658z"/>
          	</g>
          </svg>
          <svg class="menu-bar" version="1.1" @click="$root.handleMenu" v-else xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	 viewBox="0 0 294.843 294.843" style="enable-background:new 0 0 294.843 294.843;" xml:space="preserve">
            <g fill="#fff">
            	<path d="M167.619,160.134c-2.37-2.319-6.168-2.277-8.485,0.09c-2.318,2.368-2.277,6.167,0.09,8.485l47.236,46.236
            		c1.168,1.143,2.683,1.712,4.197,1.712c1.557,0,3.113-0.603,4.288-1.803c2.318-2.368,2.277-6.167-0.09-8.485L167.619,160.134z"/>
            	<path d="M125.178,133.663c1.171,1.171,2.707,1.757,4.243,1.757s3.071-0.586,4.243-1.757c2.343-2.343,2.343-6.142,0-8.485
            		L88.428,79.942c-2.343-2.343-6.143-2.343-8.485,0c-2.343,2.343-2.343,6.142,0,8.485L125.178,133.663z"/>
            	<path d="M214.9,79.942c-2.343-2.343-6.143-2.343-8.485,0L79.942,206.415c-2.343,2.343-2.343,6.142,0,8.485
            		c1.171,1.171,2.707,1.757,4.243,1.757s3.071-0.586,4.243-1.757L214.9,88.428C217.243,86.084,217.243,82.286,214.9,79.942z"/>
            </g>
          </svg>
        </transition>
        <menu-options></menu-options>
      </div>
      <div class="container">
      @yield('content')
      </div>
    </main>
    @include('layouts.footer')
    <script src="{!! asset('js/app.js') !!}?={{ rand() }}"></script>
  </body>
</html>
