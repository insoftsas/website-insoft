<template lang="html">
  <div class="schedule">
    <div class="event-current" :style=" 'top: ' + getPos.top + 'px;'  " v-if="$route.name == 'Dashboard' ">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
          <defs>
            <filter id="dropshadow">
              <feGaussianBlur in="SourceAlpha" stdDeviation="30"/>
              <feOffset dx="2" dy="2"/>
              <feComponentTransfer>
                <feFuncA type="linear" slope="0.3"/>
              </feComponentTransfer>
              <feMerge>
                <feMergeNode/>
                <feMergeNode in="SourceGraphic"/>
              </feMerge>
            </filter>
          </defs>
          <g class="main_computer">
          <polygon style="fill:#9ABADB;" points="332.663,473.644 332.663,413.596 235.984,393.58 256,473.644 "/>
          <g>
            <polygon style="fill:#D1E8FF;" points="179.337,473.644 256,473.644 256,393.58 179.337,413.596   "/>
            <polygon style="fill:#D1E8FF;" points="512,323.524 235.984,303.508 256,413.596 512,413.596  "/>
          </g>
          <polygon style="fill:#F5F5FF;" points="0,323.524 0,413.596 256,413.596 256,303.508 "/>
          <polygon style="fill:#D1E8FF;" points="377.699,458.644 256,458.644 245.992,473.644 256,488.644 377.699,488.644 "/>
          <rect x="134.3" y="458.64" style="fill:#F5F5FF;" width="121.7" height="30"/>
          <polygon style="fill:#294B6E;" points="512,23.356 256,23.356 235.984,173.44 256,323.524 512,323.524 "/>
          <rect y="23.356" style="fill:#6283A3;" width="256" height="300.17"/>
          <polygon style="fill:#F5F5FF;" points="178.828,252.914 99.354,173.44 178.828,93.966 200.041,115.179 141.78,173.44
            200.041,231.701 "/>
            <g>
            <polygon style="fill:#D1E8FF;" points="333.172,252.914 311.959,231.701 370.22,173.44 311.959,115.179 333.172,93.966
              412.646,173.44  "/>

              <rect x="241" y="78.635" transform="matrix(-0.9808 -0.1951 0.1951 -0.9808 473.2431 393.505)" style="fill:#D1E8FF;" width="30" height="189.623"/>
            </g>
          </g>
      </svg>
      <div class="toast_mesage">
        {{getPos.message}}
      </div>
    </div>

    <div class="event-schedule fade-schedule trigger-first-schedule">
      <div class="pin-circle">
        <div class="container-flag">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 70 42" style="enable-background:new 0 0 70 42;">
            <defs>
              <clipPath id="flagMask">
                <polygon id="mask" points="100,31 33.032,31 49.467,49.826 32.684,69 100,69 	"/>
              </clipPath>
            </defs>
            <g clip-path="url(#flagMask)" class="position-flag">
              <path class="flag" fill="#38a1b6" d="M100,31c-8.118,0-8.364,4.504-16.471,4.504
                c-7.657,0-8.026-4.504-16.47-4.504c-8.675,0-8.675,4.504-16.471,4.504c-8.091,0-8.091-4.504-16.471-4.504
                c-8.492,0-8.739,4.504-16.47,4.504C9.027,35.504,9.37,31,1.178,31c-8.734,0-8.589,4.504-16.471,4.504S-24.251,31-31.763,31v34.438
                c0,0,7.849,3.66,16.47,3.66c7.914,0,8.653-3.66,16.471-3.66c7.822,0,7.357,3.66,16.47,3.66s9.12-3.66,16.47-3.66
                c8.01,0,8.133,3.66,16.471,3.66c7.276,0,7.549-3.66,16.471-3.66c8.689,0,8.936,3.66,16.47,3.66c8.497,0,8.333-3.66,16.471-3.66V31z
                "/>
            </g>
          </svg>
        </div>
      </div>
      <div class="left-event">
        <div class="date-event">29 de Mayo al 8 de Junio</div>
        <div class="info-event">Visitas para recolección de información para diagnóstico sobre las necesidades de los empresarios.</div>
      </div>
      <div class="right-event empty"></div>
    </div>
    <div class="event-schedule fade-schedule-1">
      <div class="pin-circle"></div>
      <div class="left-event empty"></div>
      <div class="right-event">
        <div class="date-event">1, 7 y 13 de Junio</div>
        <div class="info-event">
          <div class="item-event">Capacitación a empresarios en transformación digital.
          </div>
          <div class="item-event">Publicación de retos.
          </div>
        </div>
      </div>
    </div>
    <div class="event-schedule fade-schedule-2">
      <div class="pin-circle"></div>
      <div class="left-event">
        <div class="date-event">1 al 13 de Junio</div>
        <div class="info-event">
          <div class="item-event">Registro de Makers.</div>
          <div class="item-event">Selección de Makers.</div>
        </div>
      </div>
      <div class="right-event empty"></div>
    </div>
    <div class="event-schedule fade-schedule-3">
      <div class="pin-circle"></div>
      <div class="left-event empty"></div>
      <div class="right-event">
        <div class="date-event">14 y 15 de Junio</div>
        <div class="info-event">Publicación y notificación a Makers.</div>
      </div>
    </div>
    <div class="event-schedule fade-schedule-4">
      <div class="pin-circle"></div>
      <div class="left-event">
        <div class="date-event">18 de Junio</div>
        <div class="info-event">Capacitación en prototipado.</div>
      </div>
      <div class="right-event empty"></div>
    </div>
    <div class="event-schedule fade-schedule-5">
      <div class="pin-circle"></div>
      <div class="left-event empty"></div>
      <div class="right-event">
        <div class="date-event">Pronto</div>
        <!--<div class="info-event">Desarrollo de la Hackathon.</div>-->
        <div class="info-event">Makers, la hackathon será reprogramada. En los proximos dias publicaremos las nuevas fechas.</div>
      </div>
      <div class="end-schedule">FINAL</div>
    </div>
    <!--<div class="event-schedule fade-schedule-6 margin-default-bottom">
      <div class="pin-circle"></div>
      <div class="left-event empty">
        <div class="date-event">29 de Junio</div>
        <div class="info-event">Cierre de la Hackathon.</div>
      </div>
      <div class="right-event empty"></div>
      <div class="end-schedule">FINAL</div>
    </div>-->
  </div>
</template>
<script>
export default {
  computed:{
    getPos: function(){
      if( moment().isBefore( moment('2018-05-29') ) ){
        return {
          'top': -50,
          'message': 'Aun no hemos comenzado, tienes tiempo para prepararte!'
        }
      }else if( moment().isBefore( moment('2018-06-08') ) ){
        return {
          'top': 25,
          'message': 'Estamos visitando a los empresarios, pronto te diremos que necesitan!'
        }
      }else if( moment().isBefore( moment('2018-06-13') ) ){
        return {
          'top': 125,
          'message': 'Aun se están registrando los makers, preparate y afianza tus habilidades tecnologicas!'
        }
      }else if( moment().isBefore( moment('2018-06-15') ) ){
        return {
          'top': 230,
          'message': 'Estamos apunto de publicar los makers seleccionados, procura estar atento!'
        }
      }else if( moment().isBefore( moment('2018-06-18') ) ){
        return {
          'top': 310,
          'message': 'Esperamos que hayas sido de los elegidos! Preparate para la Capacitación.'
        }
      }else if( moment().isBefore( moment('2018-06-27') ) ){
        return {
          'top': 380,
          'message': 'Sigue preparandote para la hackathon, estamos que iniciamos el mejor evento de Montería!'
        }
      }else if( moment().isBefore( moment('2018-06-30') ) ){
        return {
          'top': 443,
          'message': 'Te comunicaremos muy pronto la fecha del desarrollo de la Hackathon.'
          //'message': 'Escribe y compila lo mas rapido que puedas, la competencia está que arde!'
        }
      }else{
        return {
          'top': 506,
          'message': 'Te comunicaremos muy pronto la fecha del desarrollo de la Hackathon.'
          // 'message': 'Gracias por hacer parte del evento tecnologico mejor preparado para la región!'
        }
      }
    }
  },
  mounted() {
    const flag = document.querySelector(".flag")
    TweenMax.set(flag, {x: 65})
    TweenMax.to(flag, 2, {x: 0, repeat:-1, ease:Linear.easeNone})
  }
}
</script>
<style lang="scss" scoped>
.schedule{
  position: relative;
}

.container-flag {
  width: 23px;
  margin: auto;
  -webkit-transform: translateX(-21px) translateY(16px);
  transform: translateX(-21px) translateY(16px);
  position: absolute;
  top: -17px;
  right: 0;
  left: 0;
  bottom: 0;
}

.position-flag {
  transform: translateY(-29px) translateX(-31px);
}

.event-schedule {
  min-height: 4rem;
  display: inline-block;
  width: 100%;
  position: relative;
  top: -5px;
}

.pin-circle {
  position: absolute;
  transform: translateX(-50%);
  left: 50%;
  top: 0;
  bottom: 0;
  &:before {
    display: inline-block;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 1em;
    height: 1em;
    border: solid #38a1b6 2px;
    border-radius: 50%;
    background-color: #38a1b6;
    content: ' '
  }
  &:after {
    display: inline-block;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    margin-top: 1rem;
    height: 100%;
    border: solid #38a1b6 2px;
    content: ' ';
  }
}

.right-event {
  float: right;
  width: 50%;
  padding-left: 40px;
  text-align: left;
  top: -50%;
  transform: translateY(-50%);
}

.left-event {
  float: left;
  width: 50%;
  padding-right: 40px;
  text-align: right;
  top: -50%;
  transform: translateY(-50%);
}

.date-event {
  font-size: 1.5rem;
  font-weight: bold;
  color: #38a1b6;
}

.info-event {
  font-size: 1rem;
  color: #777777;
}

.item-event {
  margin-bottom: 10px;
}

.end-schedule {
  position: absolute;
  left: 50%;
  bottom: -16px;
  background: #38a1b6;
  width: 100px;
  height: 25px;
  line-height: 25px;
  font-weight: bold;
  color: #fff;
  transform: translateX(-50%);
  text-align: center;
  border-radius: 2px;
  letter-spacing: 3px;
}
.event-current{
    position: absolute;
    text-align: center;
    z-index: 1;
    width: 40px;
    height: 40px;
    left: 50%;
    transform: translateX(-50%);
    & svg{
      & .main_computer{
        transition: .5s ease!important;
      }
    }
    & svg:hover {
      & .main_computer{
        filter: url(#dropshadow);
      }
      & + .toast_mesage{
        opacity: 1;
        left: 55px;
        transform: scale(1);
        box-shadow: 0px 1px 10px rgba(black, .6);
      }
    }
    & .toast_mesage{
        transition: .5s ease!important;
        opacity: 0;
        padding: .5em;
        transform-origin: 0% 30%;
        position: absolute;
        left: 45px;
        width: 200px;
        border-radius: 3px;
        top: -7px;
        transform: scale(0);
        color: white;
        background: linear-gradient(-135deg, #0c468f, #019a95);
    }
}
</style>
