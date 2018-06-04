require('./bootstrap');

window.Vue = require('vue');

window.scrollIndex = require('./interactions');

import VueRouter from 'vue-router';
import VeeValidate from 'vee-validate';
import VuePaginate from 'vue-paginate'
import routes from './routes';

import fontawesome from '@fortawesome/fontawesome'
import fontawesomevue from '@fortawesome/vue-fontawesome'
import solid from '@fortawesome/fontawesome-free-solid'
import brands from '@fortawesome/fontawesome-free-brands'

fontawesome.library.add(solid)
fontawesome.library.add(brands)

Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.use(VuePaginate)

Vue.component('font-awesome-icon', fontawesomevue);

Vue.component('main-app', require('./components/App.vue'));
Vue.component('terms', require('./components/Terms.vue'));
Vue.component('word-writing', require('./components/wordWriting.vue'));
Vue.component('menu-admin', require('./components/MenuAdmin.vue'));
Vue.component('inscription', require('./components/Inscription.vue'));

// animations components
Vue.component('trans-animation', require('./components/Sections/InfoAnim/TransAnimation.vue'));
Vue.component('one-animation', require('./components/Sections/InfoAnim/OneAnimation.vue'));
Vue.component('two-animation', require('./components/Sections/InfoAnim/TwoAnimation.vue'));
Vue.component('three-animation', require('./components/Sections/InfoAnim/ThreeAnimation.vue'));
Vue.component('four-animation', require('./components/Sections/InfoAnim/FourAnimation.vue'));
Vue.component('five-animation', require('./components/Sections/InfoAnim/FiveAnimation.vue'));
Vue.component('six-animation', require('./components/Sections/InfoAnim/SixAnimation.vue'));

// sections components
Vue.component('home-section', require('./components/Sections/Home.vue'));
Vue.component('info-section', require('./components/Sections/Info.vue'));
Vue.component('participate-section', require('./components/Sections/Participate.vue'));
Vue.component('we-search-section', require('./components/Sections/WeSearch.vue'));
Vue.component('phase-section', require('./components/Sections/Phase.vue'));
Vue.component('schedule-section', require('./components/Sections/Schedule.vue'));
Vue.component('schedule-map', require('./components/Sections/ScheduleMap.vue'));
Vue.component('awards-section', require('./components/Sections/Awards.vue'));
Vue.component('contact-section', require('./components/Sections/Contact.vue'));
const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router,
    data() {
      return {
        show_mobile_menu: false,
        scrollMagicClass: null,
        client_id: process.env.MIX_OAUTH_CLIENT_ID,
        client_secret: process.env.MIX_OAUTH_CLIENT_KEY,
        apiMap: {
          logout: '/api/user/logout',
          login: '/api/login',
          user: '/api/user',
          makers: '/api/makers',
          groups: '/api/groups',
          users: '/api/users',
          tokens: '/api/user/tokens',
          enterprises: '/api/enterprises',
        },
        auth: false,
        user: {

        },
        token: '',
        loading: false,
        loaded: false,
        terms_status: false
      }
    },
    watch: {
      token: function(newToken){
        localStorage.token = newToken
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + newToken
      },
      show_mobile_menu: function () {
        if (this.show_mobile_menu)
          document.getElementById('body-app').style.overflow = 'hidden'
        else
          document.getElementById('body-app').style.overflow = 'initial'
      }
    },
    methods: {
      showTerms: function () {
        this.terms_status = !this.terms_status
        if (this.terms_status)
          document.getElementById('body-app').style.overflow = 'hidden'
        else
          document.getElementById('body-app').style.overflow = 'initial'
      },
      showMenu: function () {
        this.show_mobile_menu = !this.show_mobile_menu
      },
      goToView: function (id) {
        let h = document.getElementById(id).style.top
        if (h != "0px") {
          document.getElementById(id).style.top = "0px"
        }
        document.getElementById(id).scrollIntoView({block: 'start', behavior: 'smooth'})
        this.show_mobile_menu = false
      },
      getUser: function (){
        var vm=this;
        vm.loading = true;
        axios.get(vm.apiMap.user)
        .then(function(response){
          vm.auth = true;
          vm.user = response.data.data;
          if(vm.$route.name == "Login"){
            vm.$router.push("/dashboard");
          }
        })
        .catch(function(error){
          vm.auth = false;
          if(error.response.status == 401){
            vm.token = '';
          }
          vm.$router.push("/");
        }).then(() => {
          vm.loading = false;
          vm.loaded = true;
        });
      },
      logout: function (){
        var vm=this;
        axios.get(vm.apiMap.logout)
        .then(function(response){
          vm.auth = false;
          vm.token = '';
          vm.$router.push("/");
        })
        .catch(function(error){
          M.toast({html:"Hubo un error al cerrar la sesión"},6000);
        });
      }
    },
    mounted() {
      if(localStorage.token!=undefined){
        this.token = localStorage.token
      }else{
        localStorage.token = ''
      }
      axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.token
      if (this.token != '') {
        this.getUser();
      }else{
        this.loaded = true;
      }
    }
});
