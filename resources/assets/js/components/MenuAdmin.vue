<template>
  <div class="navbar-items">
    <router-link to="/" class="item">Inicio</router-link>
    <router-link to="/dashboard" class="item" :class="{'active' : $route.name == 'Dashboard'}">Dashboard</router-link>
    <router-link to="/makers" class="item" :class="{'active' : $route.name == 'Makers'}">Makers</router-link>
    <router-link to="/enterprises" class="item" :class="{'active' : $route.name == 'Enterprises'}">Empresas</router-link>
    <router-link to="/tokens" class="item" :class="{'active' : $route.name == 'Tokens'}">Mis Sesiones</router-link>
    <div class="item right" @click.prevent="$root.logout">Logout</div>
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