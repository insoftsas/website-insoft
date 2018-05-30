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
Vue.component('word-writing', require('./components/wordWriting.vue'));
Vue.component('menu-admin', require('./components/MenuAdmin.vue'));
Vue.component('inscription', require('./components/Inscription.vue'));
// sections components
Vue.component('home-section', require('./components/Sections/Home.vue'));
Vue.component('info-section', require('./components/Sections/Info.vue'));
Vue.component('participate-section', require('./components/Sections/Participate.vue'));
Vue.component('we-search-section', require('./components/Sections/WeSearch.vue'));
Vue.component('schedule-section', require('./components/Sections/Schedule.vue'));
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
        scrollMagicClass: null,
        client_id: process.env.MIX_OAUTH_CLIENT_ID,
        client_secret: process.env.MIX_OAUTH_CLIENT_KEY,
        apiMap: {
          logout: '/api/user/logout',
          login: '/oauth/token',
          user: '/api/user',
          makers: '/api/makers',
          groups: '/api/groups',
          tokens: '/api/user/tokens',
          enterprises: '/api/enterprises',
        },
        auth: false,
        user: {

        },
        token: '',
        loading: false,
        loaded: false
      }
    },
    watch: {
      token: function(newToken){
        localStorage.token = newToken
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + newToken
      }
    },
    methods: {
      goToView: function (id) {
        document.getElementById(id).scrollIntoView({block: 'start', behavior: 'smooth'})
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
