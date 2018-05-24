<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card" id="tokens_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
            <div class="progress loaders_panels" v-if="loading">
              <div class="indeterminate"></div>
            </div>
            <div class="card-content">
              <span class="card-title">Dónde iniciaste sesión</span>
              <table class="striped highlight" id="sessions">
                <tbody>
                  <tr v-for="(token,i) in tokens" :key="i">
                    <td>
                      <div class="div_width">
                        <a v-if="token.last_access.user_agent.os.family == 'Windows'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                          <font-awesome-icon class="logo_os windows" :icon="['fab', 'windows']"/></a>
                        </a>
                        <a v-else-if="token.last_access.user_agent.os.family == 'Mac OS X'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                          <font-awesome-icon class="logo_os os_x" :icon="['fab', 'apple']"/></a>
                        </a>
                        <a v-else-if="token.last_access.user_agent.os.family == 'iOS'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                          <font-awesome-icon class="logo_os os_x" :icon="['fas', 'mobile']"/></a>
                        </a>
                        <a v-else-if="token.last_access.user_agent.os.family == 'Android'" class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                          <font-awesome-icon class="logo_os android" :icon="['fab', 'android']"/></a>
                        </a>
                        <a v-else class="tooltipped" data-position="top" :data-tooltip="token.last_access.user_agent.os.toString() ">
                          <font-awesome-icon class="logo_os os_x" :icon="['fab', 'question']"/></a>
                        </a>
                      </div>
                      <div class="div_width">
                        <p class="title_os">{{typeOfDevice(token)}}{{token.last_access.user_agent.os.family}} · <span  class="tooltipped" data-position="top" :data-tooltip="'IP: '+token.last_access.ip">{{token.last_access.location}}</span></p>
                        <p>
                          <a v-if="token.last_access.user_agent.family == 'Chrome' || token.last_access.user_agent.family == 'Chrome Mobile' " class="logo_nav_cont">
                            <font-awesome-icon class="logo_nav chrome" :icon="['fab', 'chrome']"/></a>
                          </a>

                          <a v-else-if="token.last_access.user_agent.family == 'Safari' || token.last_access.user_agent.family == 'Mobile Safari'" class="logo_nav_cont">
                            <font-awesome-icon class="logo_nav chrome" :icon="['fab', 'safari']"/></a>
                          </a>

                          <a v-else-if="token.last_access.user_agent.family == 'Firefox'" class="logo_nav_cont">
                            <font-awesome-icon class="logo_nav chrome" :icon="['fab', 'firefox']"/></a>
                          </a>

                          <a v-else-if="token.last_access.user_agent.family == 'Opera'" class="logo_nav_cont">
                            <font-awesome-icon class="logo_nav chrome" :icon="['fab', 'opera']"/></a>
                          </a>
                          {{token.last_access.user_agent.family}} · <span  class="tooltipped" data-position="top" :data-tooltip="moment(token.last_access.time).format('LLLL')">{{moment(token.last_access.time).fromNow()}}</span><span v-if="token.revoked || token.current"> · <span class="help-text-token" :class="{'red-text':token.revoked,'green-text':token.current}" v-html="token.revoked?'Sesión cerrada':'Sesión actual'"></span></span>
                        </p>
                      </div>
                      <div class="hide-on-large-only div_width">
                        <a class="waves-effect waves-light btn red" :class="{'disabled': token.revoked}" @click="deleteToken(i)" :disabled="token.revoked"><font-awesome-icon icon="times" /> Cerrar sesión</a>
                      </div>
                    </td>
                    <td class="hide-on-med-and-down">
                      <a class="btn-floating tooltipped red waves-effect waves-light" :class="{'disabled': token.revoked}" :disabled="token.revoked" data-position="bottom" data-tooltip="Cerrar sesión" @click="deleteToken(i)"><font-awesome-icon icon="times" /></a>
                    </td>
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
        let dev = token.last_access.user_agent.device.family
        if(dev == 'Other'){
          if(os == 'Windows' || os == 'Mac OS X'){
            return 'PC · '
          }
        }else{
          return dev + ' · '
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
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() { 
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
              let loc = JSON.parse(xmlHttp.responseText);
              if(loc.cityName == '-' || loc.regionName == '-' || loc.countryName == '-'){
                vm.tokens[index].last_access.location = "Ubicacion desconocida"
              }else{
                vm.tokens[index].last_access.location = loc.cityName + ", " + loc.regionName + ', ' + loc.countryName
              }
            }else if(xmlHttp.readyState == 4){
              vm.tokens[index].last_access.location = "Ubicacion desconocida"
            }
        }
        xmlHttp.open("GET", 'https://api.ipinfodb.com/v3/ip-city/?key=5f8ec84ab05a9abe78fae13fd314b2d88a3b2f7c4efab1efc8f6c50e11b1e1a0&format=json&ip='+vm.tokens[index].last_access.ip, true); // true for asynchronous 
        xmlHttp.send(null);
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

    
    @media only screen and (max-width: 992px) {
      .div_width{
        margin-bottom: 12px;
        text-align: center;
        width: 100%;
        & > svg{
          width: 100%;
          font-size: 50px;
        }
      }
    }

 .btn-floating.tooltipped{
  font-size: 20px;
 }
 .title_os{
  font-size: 1rem;
  font-weight: bold;
 }
 #sessions td {
  position: relative;
  & >a, > p, > div{
    display: inline-block;
  }
 }
 .logo_nav_cont{
    & .logo_nav{

      &.chrome{
        color: rgb(73, 80, 87);
      }
    }
 }
 .help-text-token{
  font-size: 12px;
 }
 .logo_os{
    width: 55px;
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
