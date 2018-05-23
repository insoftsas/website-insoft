<template>
  <div class="container-console">
    <div class="console">
      <header data-title-cmd="Terminal">
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
    <div class="console last" @click="focusTerminal">
      <header data-title-cmd="Ejecuta comandos">
        <div class="close button-navbar-mac"></div>
        <div class="minify button-navbar-mac"></div>
        <div class="maximize button-navbar-mac"></div>
        <div class="right help" @click="showHelp">
          <span v-if="!help_show">?</span>
          <span v-else>X</span>
        </div>
      </header>
      <div v-if="help_show" class="help-box">
        <span>Puede ejecutar los siguientes comandos:</span>
        <span>clear, dev, help, goto [número de la sección]</span>
      </div>
      <input type="text" spellcheck="false" :class="{ 'move-input-cmd' : help_show }" class="command-input browser-default" id="terminal-input" v-model="command" @input="formatCommand" @keyup.enter="executeCommand" />
    </div>
  </div>
</template>

<script>
  import { ResizeObserver } from 'vue-resize'
  export default {
    data() {
      return {
        word: 'crear',
        step: 1,
        command: '$ ',
        help_show: false
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
            case 4:
              this.word = 'aprender'
              break
            case 5:
              this.word = 'descubrir'
              break
            case 6:
              this.word = 'invertir'
              break
          }
          if (this.step == 6) {
            this.step = 0
          }
      },
      formatCommand: function () {
        const n = this.command
        if (n == '' || n == null)
          this.command = '$ '
      },
      handleResize: function () {
        const s = document.getElementById('slash')
        const w = document.getElementById('width-word')
        if (s.offsetWidth >= w.offsetWidth) {
          this.step++
          this.changeWords()
        }
      },
      showHelp: function () {
        this.help_show = !this.help_show 
      },
      executeCommand: function() {
        let vm = this
        let c = vm.command
        if (c == "$ goto 1" || c == "$goto 1") {
          if (vm.help_show)
            vm.help_show = false
          vm.messageCommand('Estas en la primera sección', 1500)
        }
        else if (c == "$ goto 2" || c == "$goto 2") {
          vm.$root.goToView('info')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ goto 3" || c == "$goto 3") {
          vm.$root.goToView('judges')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ goto 4" || c == "$goto 4") {
          vm.$root.goToView('project-route')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ goto 5" || c == "$goto 5") {
          vm.$root.goToView('places')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ goto 6" || c == "$goto 6") {
          vm.$root.goToView('how-to-get')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ goto 7" || c == "$goto 7") {
          vm.$root.goToView('quotas')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ goto 8" || c == "$goto 8") {
          vm.$root.goToView('inscriptions')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ goto 9" || c == "$goto 9") {
          vm.$root.goToView('challenges')
          vm.command = "$ "
          if (vm.help_show)
            vm.help_show = false
        } else if (c == "$ dev" || c == "$dev") {
          if (vm.help_show)
            vm.help_show = false
          vm.messageCommand('Desarrollado por Segrith Tech', 1500)
        } else if (c == "$ clear" || c == "$clear") {
          vm.help_show = false
          vm.command = "$ "
        } else if (c == "$ help" || c == "$help") {
          vm.help_show = true
          vm.command = "$ "
        } else if (c == "$ ls" || c == "$ls") {
          if (vm.help_show)
            vm.help_show = false
          vm.messageCommand('css favicon.ico fonts images  index.php', 3000)
        } else {
          if (vm.help_show)
            vm.help_show = false
          vm.messageCommand('Error de comando', 1500)
        }
      },
      messageCommand: function (m, t) {
        let vm = this
        vm.command = m
        setTimeout(function () {
          vm.command = "$ "
        }, t)
      },
      focusTerminal: function () {
        document.getElementById('terminal-input').focus()
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
    padding-right: 8px;
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
  .command-input, .help-box {
    font-weight: 400;
    font-size: 1.4rem;
    border: 0px;
    position: absolute;
    width: 100%;
    height: 30px;
    line-height: 20px;
    top: 25px;
    left: 0px;
    margin: 0px;
    padding: 5px 10px;
    color: #c5d6da;
    background: inherit;
    outline: none;
    font-family: "Helvetica Neue", 'Roboto', arial, sans-serif;
    &.move-input-cmd {
      top: 75px;
    }
  }
  .help-box {
    & span {
      display: block;
    }
  }
  .write-mode {
    font-weight: 400;
    font-size: 1.4rem;
    margin: auto;
    display: block;
    padding: 0 10px;
    #word {
      margin-right: 6px;
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
  .container-console {
    position: relative;
  }
  .console {
    background: #222122;
    border-radius: 3px;
    position: relative;
    &.last {
      margin-top: 20px;
      height: 110.29px;
    }
  }
  header {
    padding: 2px 5px;
    content: '';
    position: relative;
    width: 100%;
    height: 25px;
    top: 0;
    background: #dbdbdb;
    left: 0;
    border: 1px solid rgba(100, 100, 100, .4);
    border-radius: 2px 2px 0 0;
    box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
    &:after {
      content: attr(data-title-cmd);
      text-align: center;
      color: #000;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      font-weight: 400;
    }
    & .help {
      color: #ffff;
      border-width: 1px;
      width: 19px;
      height: 19px;
      line-height: 19px;
      text-align: center;
      font-size: 1rem;
      border-style: solid;
      border-radius: 2px;
      display: inline-block;
      background: #2295f1;
      border-color: #2196F3;
      cursor: pointer;
      z-index: 50;
      position: absolute;
      right: 4px;
      top: 2.35px;
      &:hover {
        background: darken(#2295f1, 10);
        border-color: darken(#2196F3, 10);
      }
    }
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
