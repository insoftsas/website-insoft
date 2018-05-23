<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card" id="tokens_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
            <div class="card-content">
              <span class="card-title">Dónde iniciaste sesión</span>
              <table class="striped highlight" id="sessions">
                <tbody>
                  <tr v-for="(token,i) in tokens" :key="i">
                    <td>
                      <a v-if="token.last_access.user_agent.os.family == 'Windows'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                        <font-awesome-icon class="logo_os windows" :icon="['fab', 'windows']"/></a>
                      </a>
                      <a v-else-if="token.last_access.user_agent.os.family == 'Mac OS X'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                        <font-awesome-icon class="logo_os os_x" :icon="['fab', 'apple']"/></a>
                      </a>
                      <a v-else-if="token.last_access.user_agent.os.family == 'iOS'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                        <font-awesome-icon class="logo_os os_x" :icon="['fab', 'mobile-alt']"/></a>
                      </a>
                      <a v-else-if="token.last_access.user_agent.os.family == 'Android'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                        <font-awesome-icon class="logo_os android" :icon="['fab', 'android']"/></a>
                      </a>
                      <div>
                        <p class="title_os">{{typeOfDevice(token)}}{{token.last_access.user_agent.os.family}} · <span  class="tooltipped" data-position="top" :data-tooltip="'IP: '+token.last_access.ip">{{token.last_access.location}}</span></p>
                        <p>{{token.last_access.user_agent.family}} · <span  class="tooltipped" data-position="top" :data-tooltip="moment(token.last_access.time).format('LLLL')">{{moment(token.last_access.time).fromNow()}}</span></p>
                      </div>
                    </td>
                    <td><a class="btn-floating tooltipped red waves-effect waves-light" :class="{'disabled': token.revoked}" :disabled="token.revoked" data-position="bottom" data-tooltip="Cerrar sesión" @click="deleteToken(i)"><font-awesome-icon icon="times" /></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        tokens: [],
        loading: false
      }
    },
    computed: {
    },
    methods: {
      typeOfDevice: function(token){
        let os = token.last_access.user_agent.os.family
        if(os == 'Windows' || os == 'Mac OS X'){
          return 'PC '
        }
      },
      moment: function(time) {
        return moment(time)
      },
      getTokens: function() {
        let vm = this
        vm.loading = true
        axios.get(vm.$root.apiMap.tokens)
        .then(response => {
            vm.tokens = response.data.data
            _.forEach(vm.tokens,function (t,k) {
              let par = JSON.parse(vm.tokens[k].last_access)
              Vue.set(vm.tokens[k],'last_access', par);
              let user_agent = useragent.parse(vm.tokens[k].last_access.user_agent);
              Vue.set(vm.tokens[k].last_access, 'user_agent', user_agent);
              let location = "Cargando...";
              Vue.set(vm.tokens[k].last_access, 'location', location);
              vm.getLocation(k);
              console.log(vm.tokens[k].last_access.user_agent.device);
            })
            setTimeout(function(){
              $('.tooltipped').tooltip();
            },10)
        })
        .catch(error => {
            console.log(error)
            M.toast({html:"Hubo un error al obtener los tokens"},6000);
        })
        .then(() => {
            vm.loading = false
        })
      },
      getLocation: function (index) {
        let vm = this
        let request = new XMLHttpRequest();
        request.onreadystatechange = function() {
            if (request.readyState === 4) {
                if (request.status === 200) {
                    let loc = JSON.parse(request.responseText);
                    if(loc.city == undefined || loc.country == undefined){
                      vm.tokens[index].last_access.location = "Ubicacion desconocida"
                    }else{
                      vm.tokens[index].last_access.location = loc.city + ", " + loc.country
                    }
                } else if (!isValid(this.response) && this.status == 0) {
                    vm.tokens[index].last_access.location = "Ubicacion desconocida"
                } else {
                    vm.tokens[index].last_access.location = "Ubicacion desconocida"
                }
            }
        };
        //request.open("GET", 'http://ip-api.com/json/'+vm.tokens[index].last_access.ip, true);
        request.open("GET", 'http://ip-api.com/json/', true);
        request.send(null);
      },
      deleteToken: function(index) {
        let vm = this
        vm.loading = true
        axios.delete(vm.$root.apiMap.tokens+'/'+vm.tokens[index].id)
        .then(response => {
            vm.getTokens();
        })
        .catch(error => {
            console.log(error)
            M.toast({html:"Hubo un error al eliminar el token"},6000);
        })
        .then(() => {
            setTimeout(function () {
              vm.$root.getUser();
            },10);
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      vm.getTokens()
      var loginCard = anime({
        targets: '#tokens_card',
        duration: 1250,
        easing: 'easeInOutQuart',
        translateY: 0,
        opacity: 1,
        scale: 1,
        delay: 0
      });
    }
  }
</script>

<style lang="scss" scoped>
 .btn-floating.tooltipped{
  font-size: 20px;
 }
 .title_os{
  font-size: 1rem;
  font-weight: bold;
 }
 #sessions td {
  & >a, > p, > div{
    display: inline-block;
  }
 }
 .logo_os{
    font-size: 40px;
    margin: 0px 10px 0px 10px;
    &.windows{
      color: rgb(0,173,239);
    }
    &.os_x{
      color: rgb(73, 80, 87);
    }
    &.android{
      color: rgb(164,198,57);
    }
  }
</style>
