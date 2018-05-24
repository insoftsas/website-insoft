<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="enterprises_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="progress loaders_panels" v-if="loading">
              <div class="indeterminate"></div>
            </div>
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <span class="card-title">Empresas</span>
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <table class="striped highlight" id="enterprises">
                    <tbody>
                      <tr v-for="(enterprise,i) in enterprises" :key="i">
                        <td>
                          {{JSON.stringify(enterprise)}}
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
        enterprises: [],
        loading: false
      }
    },
    methods: {
      getEnterprises: function() {
        let vm = this
        vm.loading = true
        axios.get(vm.$root.apiMap.enterprises)
        .then(response => {
            vm.enterprises = response.data.data
            setTimeout(function(){
              $('.tooltipped').tooltip();
            },10)
        })
        .catch(error => {
            console.log(error)
            M.toast({html:"Hubo un error al obtener las Empresas"},6000);
        })
        .then(() => {
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      vm.getEnterprises()
      var loginCard = anime({
        targets: '#enterprises_card',
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
