<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="makers_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="progress loaders_panels" v-if="loading">
              <div class="indeterminate"></div>
            </div>
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <span class="card-title">Makers</span>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <p class="text_count">Registros: {{makers.length}}</p>
                  <table class="striped highlight" id="makers">
                    <tbody>
                      <tr>
                          <th>Doc.</th>
                          <th>Nombre</th>
                          <th>Inscripción</th>
                          <th>Creado</th>
                          <th></th>
                      </tr>
                      <tr v-for="(maker,i) in makers" :key="i">
                        <td>
                          {{ maker.doc_type + ' ' + maker.document }}
                        </td>
                        <td>
                          {{ maker.FullName }}
                        </td>
                        <td>
                          {{ maker.group_id == null ? 'Individual' : 'Grupal' }}
                        </td>
                        <td>
                          {{ maker.created_at }}
                        </td>
                        <td>
                          <router-link :to="'/makers/' + maker.id" class="waves-effect waves-blue circle btn-flat primary-color">
                            <font-awesome-icon :icon="['fas', 'eye']"/>
                          </router-link>
                          <router-link :to="'/makers/' + maker.id + '/edit'" class="waves-effect waves-blue circle btn-flat primary-color">
                            <font-awesome-icon :icon="['fas', 'edit']"/>
                          </router-link>
                          <a class="waves-effect waves-red circle btn-flat red-text" @click="delMaker(maker)">
                            <font-awesome-icon :icon="['fas', 'trash']"/>
                          </a>
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
    </div>
	</div>
</template>
<script>
  export default {
    data() {
      return {
        makers: [],
        loading: false
      }
    },
    methods: {
      delMaker: function (maker) {
          this.$root.$emit('delete-data', {
              text: 'este maker',
              route: 'makers',
              content: maker
          })
      },
      getMakers: function() {
        let vm = this
        vm.loading = true
        axios.get(vm.$root.apiMap.makers)
        .then(response => {
            vm.makers = response.data.data
            setTimeout(function(){
              $('.tooltipped').tooltip();
            },10)
        })
        .catch(error => {
            console.log(error)
            M.toast({html:"Hubo un error al obtener los makers"},6000);
        })
        .then(() => {
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      vm.getMakers()
      vm.$root.$on('update-data', function (data) {
        vm.getMakers()
      })
      var loginCard = anime({
        targets: '#makers_card',
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
