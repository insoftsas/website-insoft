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
      },
      goToView: function (id) {
        document.getElementById(id).scrollIntoView({block: 'start', behavior: 'smooth'})
      }
    },
    mounted() {

    }
});

require('debug.addIndicators')
//.setClassToggle('#trigger' ,'rotateScreenInLeft')
const controller = new ScrollMagic.Controller()

// tweens
const tween_1 = new TimelineMax()
                    .add([
                      TweenMax.to("#body-app", 0.5, { backgroundColor: '#fefe53' }),
                      TweenMax.to("#title-section-two", 0.5, { opacity: 1 }),
                      TweenMax.to("#open-menu-icon", 0.5, { fill: '#ffd152' })
                    ])
const tween_2 = new TimelineMax()
                    .add([
                      TweenMax.to("#home", 0.5, { backgroundPositionX: 'calc(50% + 1100px)', backgroundPositionY: 'center' })
                    ])

// scenes
const scene_1 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: 400})
                             .setTween(tween_1)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#judge-item", 'active')

const scene_2 = new ScrollMagic.Scene({ offset: -1, duration: 300})
                            .setTween(tween_2)
                            .addTo(controller)
                            .addIndicators()
                            .setClassToggle("#home-item", 'active')
