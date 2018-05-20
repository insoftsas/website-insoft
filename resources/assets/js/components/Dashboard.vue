<template>
  <div>
    <div class="navbar-items">
      <router-link to="/" class="item">Inicio</router-link>
      <div class="item right" @click.prevent="$root.logout">Logout</div>
    </div>
	</div>
</template>
<script>
  export default {
    data() {
      return {

      }
    },
    methods: {

    },
    mounted() {
      let vm = this
      if(!vm.$root.auth){
        vm.$router.push("/");
      }
    }
  }
</script>

<style lang="scss" scoped>
 
</style>
