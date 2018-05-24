<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="makers_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Makers</span>
              <table class="striped highlight" id="sessions">
                <tbody>
                  <tr v-for="(maker,i) in makers" :key="i">
                    <td>
                      {{JSON.stringify(maker)}}
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
        makers: [],
        loading: false
      }
    },
    methods: {
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
