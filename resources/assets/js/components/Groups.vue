<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="groups_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="progress loaders_panels" v-if="loading">
              <div class="indeterminate"></div>
            </div>
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <span class="card-title">Grupos</span>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <p class="text_count">Registros: {{groups.length}}</p>
                  <table class="striped highlight" id="groups">
                    <tbody>
                      <tr>
                          <th>Codigo</th>
                          <th>Nombre</th>
                          <th>Integrantes</th>
                          <th>Creado</th>
                          <th></th>
                      </tr>
                      <tr v-for="(group,i) in groups" :key="i">
                        <td>
                          {{group.code}}
                        </td>
                        <td>
                          {{group.name}}
                        </td>
                        <td>
                          <p v-for="(maker,im) in group.makers">{{maker.FullName}}<span class="leader_span" v-if="maker.id == group.leader_id">Lider</span></p>
                        </td>
                        <td>
                          {{group.created_at}}
                        </td>
                        <td>
                          <router-link :to="'/groups/' + group.id" class="waves-effect waves-blue circle btn-flat primary-color"><font-awesome-icon :icon="['fas', 'eye']"/></router-link>
                          <router-link :to="'/groups/' + group.id + '/edit'" class="waves-effect waves-blue circle btn-flat primary-color">
                            <font-awesome-icon :icon="['fas', 'edit']"/>
                          </router-link>
                          <a class="waves-effect waves-red circle btn-flat red-text" @click="delGroup(group)">
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
        groups: [],
        loading: false
      }
    },
    methods: {
      delGroup: function (group) {
          this.$root.$emit('delete-data', {
              text: 'este grupo',
              route: 'groups',
              content: group
          })
      },
      getGroups: function() {
        let vm = this
        vm.loading = true
        axios.get(vm.$root.apiMap.groups)
        .then(response => {
            vm.groups = response.data.data
            setTimeout(function(){
              $('.tooltipped').tooltip();
            },10)
        })
        .catch(error => {
            console.log(error)
            M.toast({html:"Hubo un error al obtener los grupos"},6000);
        })
        .then(() => {
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      vm.getGroups()
      vm.$root.$on('update-data', function (data) {
        vm.getGroups()
      })
      var loginCard = anime({
        targets: '#groups_card',
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
