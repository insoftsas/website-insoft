<template>
  <div class="admin_panel">
    <menu-admin></menu-admin>
    <div class="container">
      <div class="row">
        <div class="col s12" id="dashboard_card" style="opacity:0; transform: translateY(100px) scale(0.8);">
          <div class="card">
            <div class="card-content">
              <div class="row">
                <span class="card-title special-margin">Dashboard</span>
                <div class="col s12">
                  <schedule-map></schedule-map>
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
        })
        .then(() => {
            vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      var loginCard = anime({
        targets: '#dashboard_card',
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
.special-margin {
  margin-bottom: 70px!important;
}
</style>
