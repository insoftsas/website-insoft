require('./bootstrap');

window.Vue = require('vue');

Vue.component('word-writing', require('./components/WordWriting.vue'));
Vue.component('menu-options', require('./components/Menu.vue'));

const app = new Vue({
    el: '#app',
    data() {
      return {
        show_menu: false
      }
    },
    watch: {
      show_menu: function () {
        const b = document.body
        if (this.show_menu) {
          b.style.overflow = 'hidden'
        } else {
          b.style.overflow = 'initial'
        }
      }
    },
    methods: {
      handleMenu: function () {
        this.show_menu = !this.show_menu
      }
    },
    mounted() {

    }
});

const controller = new ScrollMagic.Controller()

const scene = new ScrollMagic.Scene({
    triggerElement: '#trigger', // starting scene, when reaching this element
  })
  .setClassToggle('#trigger' ,'rotateScreenInLeft')
  .addTo(controller)
