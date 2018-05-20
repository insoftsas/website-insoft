<template>
  <div class="console">
    <header>
      <div class="close button-navbar-mac"></div>
      <div class="minify button-navbar-mac"></div>
      <div class="maximize button-navbar-mac"></div>
    </header>
    <span class="write-mode">Ultimo acceso: {{ date }}</span>
    <span class="write-mode">El evento donde podrás
      <span class="container-word" id="width-word">
        <div id="word">
          <!-- colocar a .slash para cuadrar :class="{'move-right' : step == 3 || step == 0}" -->
          <span class="word-text">{{ word }}<span class="slash"></span></span>
        </div>
        <resize-observer @notify="handleResize" id="slash">&nbsp;</resize-observer>
      </span>
    </span>
    <div class="container-algorithm-icon">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
        <path d="m17 32c0-1.51 2.19-2.656 2.633-4.019.458-1.412-.624-3.623.231-4.8s3.308-.837 4.5-1.7 1.592-3.292 3-3.75c1.362-.443 3.126 1.269 4.636 1.269s3.274-1.712 4.637-1.269c1.412.458 1.829 2.895 3 3.751s3.631.513 4.5 1.7-.227 3.387.231 4.8c.442 1.362 2.632 2.508 2.632 4.018s-2.19 2.656-2.633 4.019c-.458 1.412.624 3.623-.231 4.8s-3.308.837-4.5 1.7-1.592 3.292-3 3.75c-1.362.443-3.126-1.269-4.636-1.269s-3.274 1.712-4.637 1.269c-1.412-.458-1.829-2.895-3-3.751s-3.631-.513-4.5-1.7.227-3.387-.231-4.8c-.442-1.362-2.632-2.508-2.632-4.018z" fill="#fcf05a" class="sun"/>
        <circle cx="32" cy="32" fill="#fdbd40" r="10"/>
        <path d="m32 54a22 22 0 1 1 14.667-5.6l-1.334-1.49a19.948 19.948 0 1 0 -10.475 4.89l.284 1.98a22.186 22.186 0 0 1 -3.142.22z" class="st0-solar half-saucer"/>
        <path d="m32 60a28.008 28.008 0 0 1 -24.546-41.482l1.752.964a26 26 0 1 0 48.349 7.7l1.966-.368a28.025 28.025 0 0 1 -27.521 33.186z" class="st0-solar dish-outside"/>
        <path d="m51.379 14.667a26.008 26.008 0 0 0 -33-4.815l-1.049-1.7a28.012 28.012 0 0 1 35.54 5.181z" class="st0-solar dish-outside"/>
        <circle cx="12" cy="13" fill="#84f03c" r="3" class="dish-outside"/>
        <circle cx="41" cy="51" fill="#7fcac9" r="2" class="half-saucer"/>
        <circle cx="57" cy="20" fill="#fdbd40" r="4" class="dish-outside"/>
        <g fill="#7d8d9c">
          <path d="m52 4h2v2h-2z" class="rect-anim-one"/>
          <path d="m56 6h2v2h-2z" class="rect-anim-two"/>
          <path d="m2 54h2v2h-2z" class="rect-anim-three"/>
          <path d="m6 56h2v2h-2z" class="rect-anim-two"/>
          <path d="m54 54h2v2h-2z" class="rect-anim-four"/>
          <path d="m58 56h2v2h-2z" class="rect-anim-five"/>
        </g>
      </svg>
    </div>
  </div>
</template>

<script>
  import { ResizeObserver } from 'vue-resize'
  export default {
    data() {
      return {
        word: 'crear',
        step: 1
      }
    },
    methods: {
      changeWords: function () {
          switch (this.step) {
            case 1:
              this.word = 'crear'
              break
            case 2:
              this.word = 'explorar'
              break
            case 3:
              this.word = 'imaginar'
              break
          }
          if (this.step == 3) {
            this.step = 0
          }
      },
      handleResize: function () {
        const s = document.getElementById('slash')
        const w = document.getElementById('width-word')
        if (s.offsetWidth >= w.offsetWidth) {
          this.step++
          this.changeWords()
        }
      }
    },
    computed: {
      date: function () {
        return moment().format('LLLL')
      }
    },
    mounted() {
      let vm = this
    }
  }
</script>

<style lang="scss" scoped>
  .word-text {
    position: relative;
    padding-right: 11px;
  }
  .slash {
    position: absolute;
    top: 0px;
    right: 0;
    width: 0;
    height: 100%;
    border-left: .3em solid #FFFFFF;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    animation: parpadeo 1s step-end infinite;
  }
  .write-mode {
    font-weight: 400;
    font-size: 1.7rem;
    margin: auto;
    display: block;
    #word {
      margin-right: 6px;
      width: 120px;
      display: inline-block;
    }
    & .container-word {
      position: relative;
      line-height: 39px;
      text-align: left;
    }
    & #slash {
      position: absolute;
      top: 0px;
      right: 0;
      width: 0;
      height: 100%;
      outline: none;
      background-color: #222122;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      animation: escribiendo 1s steps(12, end) infinite alternate;
      -webkit-animation: escribiendo 1s steps(12, end) infinite alternate;
      -moz-animation: escribiendo 1s steps(12, end) infinite alternate;
    }
  }
  .console {
    background: #222122;
    padding: 0 10px;
    border-radius: 3px;
    position: relative;
  }
  header {
    padding: 2px 5px;
    content: '';
    position: absolute;
    width: 100%;
    height: 25px;
    top: -24px;
    background: #dbdbdb;
    left: 0;
    border: 1px solid rgba(100, 100, 100, .4);
    border-radius: 2px 2px 0 0;
    box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
  }
  .button-navbar-mac {
    border-width: 1px;
    width: 15px;
    height: 15px;
    border-style: solid;
    border-radius: 50%;
    display: inline-block;
    &.close {
      background: #fc605c;
      border-color: #dd4643;
    }
    &.maximize {
      background: #34c84a;
      border-color: #26a933;
    }
    &.minify {
      background: #f8bf34;
      border-color: #e3aa1f;
    }
  }
</style>
