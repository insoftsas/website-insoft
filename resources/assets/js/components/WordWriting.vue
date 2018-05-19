<template>
  <div class="console">
    <span class="write-mode">El evento donde podrás
      <span class="container-word" id="width-word">
        <div id="word">
          <span class="word-text">{{ word }}<span class="slash" :class="{'move-right' : step == 3 || step == 0}"></span></span>
        </div>
        <resize-observer @notify="handleResize" id="slash">&nbsp;</resize-observer>
      </span>
    </span>
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
    &.move-right {
      right: -10px;
    }
  }
  .write-mode {
    font-weight: 400;
    font-size: 2rem;
    margin: auto;
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
      background-color: #343233;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      animation: escribiendo 1s steps(12, end) infinite alternate;
      -webkit-animation: escribiendo 1s steps(12, end) infinite alternate;
      -moz-animation: escribiendo 1s steps(12, end) infinite alternate;
    }
  }
</style>
