<template>
  <div>
    <div class="navbar-items">
      <router-link to="/" v-if="!$root.auth" class="item"><span>Inicio</span></router-link>
      <router-link to="/dashboard" v-else class="item"><span>Dashboard</span></router-link>
    </div>
	  <h1 class="text_404">La pagina que está buscando no existe</h1>
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
    }
  }
</script>

<style lang="scss" scoped>
 .text_404{
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  transform: translateY(-100%);
  color: white;
 }
</style>
