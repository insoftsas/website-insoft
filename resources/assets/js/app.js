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

        }
      }
    },
    methods: {
      goToView: function (id) {
        document.getElementById(id).scrollIntoView({block: 'start', behavior: 'smooth'})
      },
      getUser: function (){
        var vm=this;
        axios.get(vm.apiMap.user)
        .then(function(response){
          vm.auth = true;
          vm.user = response.data.data;
        })
        .catch(function(error){
          vm.auth = false;
        });
      }
    },
    mounted() {

    }
});