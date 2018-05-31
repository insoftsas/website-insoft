<template>
  <div class="navbar-items">
    <router-link to="/" class="item"><span>Inicio</span></router-link>
    <router-link to="/dashboard" class="item" :class="{'active' : $route.name == 'Dashboard'}"><span>Dashboard</span></router-link>
    <router-link v-if="$root.user.isSuperAdmin" to="/groups" class="item" :class="{'active' : $route.name == 'Groups'}"><span>Grupos</span></router-link>
    <router-link v-if="$root.user.isSuperAdmin" to="/makers" class="item" :class="{'active' : $route.name == 'Makers'}"><span>Makers</span></router-link>
    <router-link v-if="$root.user.isSuperAdmin" to="/enterprises" class="item" :class="{'active' : $route.name == 'Enterprises'}"><span>Empresas</span></router-link>
    <router-link v-if="$root.user.isSuperAdmin" to="/users" class="item" :class="{'active' : $route.name == 'Users'}"><span>Usuarios</span></router-link>
    <router-link to="/tokens" class="item" :class="{'active' : $route.name == 'Tokens'}"><span>Mis Sesiones</span></router-link>
    <div class="item" @click.prevent="$root.logout"><span>Logout</span></div>
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