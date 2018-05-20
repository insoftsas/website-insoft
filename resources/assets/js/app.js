require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

Vue.component('main-app', require('./components/App.vue'));
Vue.component('word-writing', require('./components/WordWriting.vue'));

const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router,
    data() {
      return {

      }
    },
    methods: {
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
                      TweenMax.to("#body-app", 0.5, { backgroundColor: '#4cc0e0' }),
                      TweenMax.to("#title-section-two", 0.5, { opacity: 1 }),
                      TweenMax.to(".judge", 0.5, { opacity: 1 }),
                      TweenMax.to("#open-menu-icon", 0.5, { fill: '#ffd152' })
                    ])
const tween_2 = new TimelineMax()
                    .add([
                      TweenMax.to("#home", 0.5, { backgroundPositionX: 'calc(50% + 1350px)', backgroundPositionY: 'center' })
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
