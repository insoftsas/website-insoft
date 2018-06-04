<template lang="html">
  <section id="home">
    <div class="container">
      <div class="col s12">
        <div class="container-image-transdigital">
          <img src="/images/logo.png" alt="Logo Transformación Digital" class="responsive-img" />
        </div>
        <span class="write-mode">El evento donde podrás
          <span class="container-word" id="width-word">
            <div id="word">
              <!-- colocar a .slash para cuadrar :class="{'move-right' : step == 3 || step == 0}" -->
              <span class="word-text">{{ word }}<span class="slash"></span></span>
            </div>
            <resize-observer @notify="handleResize" id="slash">&nbsp;</resize-observer>
          </span>
        </span>
        <div class="trigger-main">
          <div class="btn-inscription-container">
            <router-link to="/inscription">Inscribirme</router-link>
          </div>
          <div class="more-info" @click="$root.goToView('info')">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490.688 490.688" style="enable-background:new 0 0 490.688 490.688;" xml:space="preserve">
              <path d="M245.213,373.415c-2.831,0.005-5.548-1.115-7.552-3.115L2.994,135.633c-4.093-4.237-3.975-10.99,0.262-15.083  c4.134-3.992,10.687-3.992,14.82,0l227.136,227.115l227.115-227.136c4.093-4.237,10.845-4.354,15.083-0.262  c4.237,4.093,4.354,10.845,0.262,15.083c-0.086,0.089-0.173,0.176-0.262,0.262L252.744,370.279  C250.748,372.281,248.039,373.408,245.213,373.415z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
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
    handleResize: function () {
      const s = document.getElementById('slash')
      const w = document.getElementById('width-word')
      if (s.offsetWidth >= (w.offsetWidth - 1)) {
        this.step++
        this.changeWords()
      }
    }
  }
}
</script>

<style lang="scss" scoped>
  .trigger-main {
    position: relative;
  }
  .container {
    animation: fadeInAfter .5s ease;
  }
  .more-info {
    position: relative;
    cursor: pointer;
    width: 35px;
    margin: auto;
    animation: moveArrow 1.5s ease-out infinite alternate;
    &:hover {
      & svg {
        transform: translateX(-3px) scale(1.2);
      }
    }
    & svg {
      transform: translateX(-3px);
      transition: all .3s ease;
      & path {
        fill: #fff;
      }
    }
  }
  .btn-inscription-container {
    text-align: center;
    margin: 112px 0 57px 0;
    position: relative;
    & a {
      color: #3c7fb9;
      font-weight: bold;
      width: max-content;
      padding: 5px 50px;
      background: #fff;
      font-size: 1.5rem;
      border-radius: 30px;
      border: 1px solid #fff;
      text-transform: uppercase;
    }
  }
  .container-image-transdigital {
    width: 400px;
    margin: auto;
    position: relative;
  }
  .slash {
    position: absolute;
    top: 4px;
    right: 0;
    width: 0;
    height: 80%;
    border-left: .3em solid #fff;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    animation: parpadeo 1s step-end infinite;
  }
  .write-mode {
    position: relative;
    font-weight: 400;
    font-size: 2.4rem;
    margin: auto;
    display: block;
    padding: 0 10px;
    background: #2a5b83;//#004a65; //#024f6b
    width: max-content;
    color: #fff;
    border-radius: 2px;
    #word {
      margin-right: 14px;
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
      background-color: #2a5b83;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      animation: escribiendo 1s steps(12, end) infinite alternate;
      -webkit-animation: escribiendo 1s steps(12, end) infinite alternate;
      -moz-animation: escribiendo 1s steps(12, end) infinite alternate;
    }
  }
</style>
