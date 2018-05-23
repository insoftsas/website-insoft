<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card" id="tokens_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
            <div class="card-content">
              <span class="card-title">Sesiones Activas</span>
              <table class="striped highlight">
                <thead>
                  <tr>
                      <th>Token</th>
                      <th>Creado</th>
                      <th>Expira</th>
                      <th>Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(token,i) in tokens" :key="i">
                    <td>{{token.id}}</td>
                    <td>{{token.created_at}}</td>
                    <td>{{token.expires_at}}</td>
                    <td>{{token.revoked?'Inactiva':'Activa'}}</td>
                    <td><a class="btn-floating tooltipped red waves-effect waves-light" :class="{'disabled': token.revoked}" :disabled="token.revoked" data-position="bottom" data-tooltip="Cerrar conexión" @click="deleteToken(i)"><font-awesome-icon icon="trash" /></a></td>
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
            M.toast({html:"Hubo un error al obtener los tokens"},6000);
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
</style>
