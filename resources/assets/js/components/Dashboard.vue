<template>
  <div>
    <div class="navbar-items">
      <router-link to="/" class="item">Inicio</router-link>
      <div class="item right" @click.prevent="$root.logout">Logout</div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content">
              <table class="striped highlight">
                <thead>
                  <tr>
                      <th>Token</th>
                      <th>Creado</th>
                      <th>Expira</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(token,i) in tokens" :key="i">
                    <td>{{token.id}}</td>
                    <td>{{token.created_at}}</td>
                    <td>{{token.expires_at}}</td>
                    <td><a class="btn-floating tooltipped mainColor waves-effect waves-light" :class="{'disabled': token.revoked}" :disabled="token.revoked" data-position="bottom" data-tooltip="Cerrar conexión" @click="deleteToken(i)"><font-awesome-icon icon="trash" /></a></td>
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
    methods: {
      getTokens: function() {
        let vm = this
        vm.loading = true
        axios.get('/api/user/tokens')
        .then(response => {
            vm.tokens = response.data.data
            setTimeout(function(){
              $('.tooltipped').tooltip();
            },10)
        })
        .catch(error => {
            console.log(error)
            M.toast("Hubo un error al obtener los tokens",6000);
        })
        .then(() => {
            vm.loading = false
        })
      },
      deleteToken: function(index) {
        let vm = this
        vm.loading = true
        axios.delete('/api/user/tokens/'+vm.tokens[index].id)
        .then(response => {
            vm.getTokens()
        })
        .catch(error => {
            console.log(error)
            M.toast("Hubo un error al eliminar el token",6000);
        })
        .then(() => {
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      if(!vm.$root.auth){
        vm.$router.push("/");
      }else{
        vm.getTokens();
      }
    }
  }
</script>

<style lang="scss" scoped>
 .btn-floating.tooltipped{
  font-size: 20px;
 }
</style>
