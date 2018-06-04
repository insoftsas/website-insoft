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
                <div class="col s12">
                  <table class="striped highlight" id="objects">
                    <tbody>
                      <tr v-for="(field,k) in temp" v-if=" k != 'deleted_at' && k != 'updated_at' ">
                          <th>{{ k }}</th>
                          <td v-html=" printField(field)"></td>
                      </tr>
                    </tbody>
                  </table>
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
      printField: function(field){
        let print = ''
        if(_.isArray(field)){
          _.forEach(field,function (o,k) {
            if( _.isObject(o) ){
              if(_.has(o, 'display_name')){
                print += '<p>'+o.display_name+'</p>'
              }else if(_.has(o, 'name')){
                print += '<p>'+o.name+'</p>'
              }else {
                print += '<p>'+o+'</p>'
              }
            }else{
              print += '<p>'+o+'</p>'
            }
          })
        }else if( _.isObject(field) ){
          if(_.has(field, 'display_name')){
            print += '<p>'+field.display_name+'</p>'
          }else if(_.has(field, 'name')){
            print += '<p>'+field.name+'</p>'
          }else {
            print += '<p>'+field+'</p>'
          }
        }else{
          print += '<p>'+field+'</p>'
        }
        return print;
      },
      getObj: function() {
        let vm = this
        vm.loading = true
        axios.get('/api/' + vm.$route.params.type + '/' +  vm.$route.params.id)
        .then(response => {
            vm.temp = response.data.data
            setTimeout(function(){
              $('.tooltipped').tooltip();
            },10)
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
