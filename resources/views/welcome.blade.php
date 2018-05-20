@extends('layouts.app')

@section('content')
<div class="row">
  <section id="home">
    <h1 class="title-main">Hackathon Montería</h1>
    <div class="col s12 m5">
      <div class="box-register">
        <h2 class="title-sub center">Inscríbete <span class="y-text">aquí</span></h2>
        <div class="content-register">
          <div class="row">
            <div class="col s12">
              <img src="{{ asset('images/logo.png') }}" class="responsive-img" width="200" />
              <p class="description-text">Es muy facíl, selecciona tu rol:</p>
            </div>
            <div class="col s12 m6">
              <button class="button-register">
                <div class="icon-caracter">
                  <svg version="1.1" id="businessman" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 25.916 25.916" style="enable-background:new 0 0 25.916 25.916;" xml:space="preserve">
                    <g class="fill-caracter-icon">
                  		<path d="M7.938,8.13c0.09,0.414,0.228,0.682,0.389,0.849c0.383,2.666,2.776,4.938,4.698,4.843
                  			c2.445-0.12,4.178-2.755,4.567-4.843c0.161-0.166,0.316-0.521,0.409-0.938c0.104-0.479,0.216-1.201-0.072-1.583
                  			c-0.017-0.02-0.127-0.121-0.146-0.138c0.275-0.992,0.879-2.762-0.625-4.353c-0.815-0.862-1.947-1.295-2.97-1.637
                  			c-3.02-1.009-5.152,0.406-6.136,2.759C7.981,3.256,7.522,4.313,8.078,6.32C8.024,6.356,7.975,6.402,7.934,6.458
                  			C7.645,6.839,7.833,7.651,7.938,8.13z"/>
                  		<path d="M23.557,22.792c-0.084-1.835-0.188-4.743-1.791-7.122c0,0-0.457-0.623-1.541-1.037
                  			c0,0-2.354-0.717-3.438-1.492l-0.495,0.339l0.055,3.218l-2.972,7.934c-0.065,0.174-0.231,0.289-0.416,0.289
                  			s-0.351-0.115-0.416-0.289l-2.971-7.934c0,0,0.055-3.208,0.054-3.218c0.007,0.027-0.496-0.339-0.496-0.339
                  			c-1.082,0.775-3.437,1.492-3.437,1.492c-1.084,0.414-1.541,1.037-1.541,1.037c-1.602,2.379-1.708,5.287-1.792,7.122
                  			c-0.058,1.268,0.208,1.741,0.542,1.876c4.146,1.664,15.965,1.664,20.112,0C23.35,24.534,23.614,24.06,23.557,22.792z"/>
                  		<path d="M13.065,14.847l-0.134,0.003c-0.432,0-0.868-0.084-1.296-0.232l1.178,1.803l-1.057,1.02
                  			l1.088,6.607c0.009,0.057,0.058,0.098,0.116,0.098c0.057,0,0.106-0.041,0.116-0.098l1.088-6.607l-1.058-1.02l1.161-1.776
                  			C13.888,14.756,13.487,14.83,13.065,14.847z"/>
                    </g>
                  </svg>
                </div>
                <span>Empresario</span>
              </button>
            </div>
            <div class="col s12 m6">
              <button class="button-register">
                <div class="icon-caracter">
                  <svg version="1.1" id="developer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g class="fill-caracter-icon">
                  		<path d="M441.217,235.868l-37.982-8.802l12.093-37.912l-0.879-0.293c-14.881-4.96-31.125-9.049-48.264-12.282
                  			c-6.656,54.889-53.528,97.558-110.184,97.558c-55.875,0-102.231-41.501-109.884-95.295c-17.267,3.639-33.567,8.144-48.424,13.509
                  			l11.073,34.715l-38.004,8.807L0,366.342v79.397h84.333V311.805h343.333V445.74H512v-80.103L441.217,235.868z"/>
                  		<path d="M380.972,81.566c-18.27-40.058-54.956-69.109-98.135-77.711c-17.809-3.548-35.865-3.548-53.674,0
                  			c-43.179,8.602-79.865,37.653-98.135,77.711l-36.553,80.144c44.649-14.98,101.279-23.544,160.609-24.199
                  			c58.917-0.643,115.535,6.531,160.653,20.281L380.972,81.566z"/>
                  		<path d="M175.696,173.584c5.143,39.744,39.182,70.554,80.304,70.554c41.688,0,76.11-31.66,80.513-72.196
                  			C284.593,165.404,227.333,165.99,175.696,173.584z"/>
                  		<path d="M114.333,510.805h283.333v-169H114.333V510.805z M256,405.091l21.213,21.213L256,447.518l-21.213-21.213L256,405.091z"/>
                    </g>
                  </svg>
                </div>
                <span>Desarrollador</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m7">
      <word-writing></word-writing>
    </div>
  </section>
  <section id="judges">
    <h1 class="title-main" id="title-section-two">JURADOS</h1>
    <div class="container-judges">
      <div class="judge">
        <img src="{{ asset('images/judges/omar.jpg') }}" width="200" class="responsive-img" />
      </div>
    </div>
  </section>
</div>
@endsection
