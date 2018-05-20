require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

Vue.component('main-app', require('./components/App.vue'));
Vue.component('word-writing', require('./components/WordWriting.vue'));

Vue.component('login', require('./components/Auth/Login.vue'));

const router = new VueRouter({
    routes
});

const app = new Vue({
    el: '#app',
    router,
    data() {
      return {
        apiMap: {
          logout: '/logout',
          login: '/login',
          user: '/api/user',
        },
        auth: false,
        user: {

        },
        loading: false,
        loaded: false
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
          //vm.$router.push("/");
          window.location.reload();
        })
        .catch(function(error){
        });
      }
    },
    mounted() {
      this.getUser();
    }
});