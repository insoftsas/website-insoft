<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="object_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="progress loaders_panels" v-if="loading">
              <div class="indeterminate"></div>
            </div>
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <span class="card-title">{{ getTitle }}</span>
                </div>
              </div>
              <div class="row">
                <div class="containter-question col s12 m6" v-for="(field,k) in temp" v-if="checkField(field,k)">
                  <label>{{k}} <span class="red-text" v-if="error[k] != undefined">* {{ error[k][0] }}</span></label>
                  <input type="text" v-model="temp[k]" :disabled="loading" required class="browser-default input-hack" />
                </div>
              </div>
              <div class="row">
                <div class="containter-question col s12 m6 center completed-successfully">
                  <button @click.prevent="$router.push('/'+$route.params.type+'/'+$route.params.id)" :disabled="loading">Volver</button>
                </div>
                <div class="containter-question col s12 m6 center completed-successfully">
                  <button @click.prevent="saveObj" :disabled="loading">{{ !loading ? 'Guardar' : 'Guardando...' }}</button>
                </div>
              </div>
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
        temp: {

        },
        error: {

        },
        loading: false
      }
    },
    computed:{
      getTitle: function () {
        let vm = this
        if(vm.temp.name != undefined){
          return vm.temp.name
        }else if(vm.temp.FullName != undefined){
          return vm.temp.FullName
        }else if(vm.temp.razon_social_propietario != undefined){
          return vm.temp.razon_social_propietario
        }else{
          return 'Cargando...'
        }
      }
    },
    methods: {
      isArray: function(ob){
        return _.isArray(ob)
      },
      checkField: function (field,k) {
        if(k == 'deleted_at' || k == 'updated_at' || k == 'created_at' || k == 'id' || k == 'isSuperAdmin' || k == 'isEnterprise' || k == 'isMaker' || _.isArray(field) || _.isObject(field)){
          return false
        }
        return true
      },
      saveObj: function () {
        let vm = this
        vm.loading = true
        vm.error = {}
        axios.put('/api/' + vm.$route.params.type + '/' +  vm.$route.params.id,vm.temp)
        .then(response => {
          vm.$router.push("/"+vm.$route.params.type);
        })
        .catch(error => {
            console.log(error)
            let m = true
            if(error.response != undefined){
              if(error.response.data != undefined){
                if(error.response.data.errors != undefined){
                  m = false
                }
              }
            }
            if(m){
              M.toast({html:"Hubo un error al guardar los datos"},6000);
            }else{
              vm.error = error.response.data.errors
            }
        })
        .then(() => {
            vm.loading = false
        })
      },
      getObj: function() {
        let vm = this
        vm.loading = true
        axios.get('/api/' + vm.$route.params.type + '/' +  vm.$route.params.id)
        .then(response => {
            vm.temp = response.data.data
            _.forEach(vm.temp,function (o,k) {
              if(!vm.checkField(o,k)){
                delete vm.temp[k]
              }
            })
        })
        .catch(error => {
            console.log(error)
            M.toast({html:"Hubo un error al obtener la información"},6000);
        })
        .then(() => {
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      vm.getObj()
      var loginCard = anime({
        targets: '#object_card',
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

</style>
