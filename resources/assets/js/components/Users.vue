<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="users_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="progress loaders_panels" v-if="loading">
              <div class="indeterminate"></div>
            </div>
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <span class="card-title">Usuarios</span>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <p class="text_count">Registros: {{users.length}}</p>
                  <table class="striped highlight" id="users">
                    <tbody>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Email</th>
                          <th>Roles</th>
                          <th></th>
                      </tr>
                      <tr v-for="(user,i) in users" :key="i">
                        <td>
                          {{ user.id }}
                        </td>
                        <td>
                          {{ user.name }}
                        </td>
                        <td>
                          {{ user.email }}
                        </td>
                        <td>
                          {{ user.created_at }}
                        </td>
                        <td>
                          <router-link :to="'/users/' + user.id" class="waves-effect waves-blue circle btn-flat primary-color">
                            <font-awesome-icon :icon="['fas', 'eye']"/>
                          </router-link>
                          <router-link :to="'/users/' + user.id + '/edit'" class="waves-effect waves-blue circle btn-flat primary-color">
                            <font-awesome-icon :icon="['fas', 'edit']"/>
                          </router-link>
                          <a class="waves-effect waves-red circle btn-flat red-text" @click="delUser(user)">
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
        users: [],
        loading: false
      }
    },
    methods: {
      delUser: function (user) {
          this.$root.$emit('delete-data', {
              text: 'este usuario',
              route: 'users',
              content: user
          })
      },
      getUsers: function() {
        let vm = this
        vm.loading = true
        axios.get(vm.$root.apiMap.users)
        .then(response => {
            vm.users = response.data.data
            setTimeout(function(){
              $('.tooltipped').tooltip();
            },10)
        })
        .catch(error => {
            console.log(error)
            M.toast({html:"Hubo un error al obtener los usuarios"},6000);
        })
        .then(() => {
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      vm.getUsers()
      vm.$root.$on('update-data', function (data) {
        vm.getUsers()
      })
      var loginCard = anime({
        targets: '#users_card',
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
