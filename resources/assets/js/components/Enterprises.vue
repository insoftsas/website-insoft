<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="enterprises_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Empresas</span>
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
