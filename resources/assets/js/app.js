require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VeeValidate from 'vee-validate';
import VuePaginate from 'vue-paginate'
import routes from './routes';

import fontawesome from '@fortawesome/fontawesome'
import fontawesomevue from '@fortawesome/vue-fontawesome'
import solid from '@fortawesome/fontawesome-free-solid'

fontawesome.library.add(solid)

Vue.use(VueRouter);
Vue.use(VeeValidate);
Vue.use(VuePaginate)

Vue.component('font-awesome-icon', fontawesomevue);

Vue.component('main-app', require('./components/App.vue'));
Vue.component('word-writing', require('./components/wordWriting.vue'));
Vue.component('menu-admin', require('./components/MenuAdmin.vue'));

const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router,
    data() {
      return {
        client_id: '2',
        client_secret: 'SOcWtgo3QmzYnc87wgxxFV1vMjiEAqmGScPjmknZ',
        apiMap: {
          logout: '/logout',
          login: '/oauth/token',
          user: '/api/user',
          makers: '/api/makers',
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