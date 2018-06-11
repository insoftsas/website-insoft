<template lang="html">
  <div>
    <div class="show-on-medium-and-down hide-on-med-and-up nav-container-mobile">
      <span class="btn-mobile-menu" @click="$root.showMenu">|||</span>
      <span class="title-mobile-menu">Hackathon Montería</span>
    </div>
    <div class="navbar-items-mobile" v-if="$root.show_mobile_menu" :class="{ 'show' : $root.show_mobile_menu }">
      <div class="close-menu-icon" @click="$root.showMenu">X</div>
      <div class="title-show-menu">Hackathon Montería</div>
      <div class="item">
        <router-link to="/">Volver al inicio</router-link>
      </div>
      <div class="item">
		    <router-link to="/login" v-if="!$root.auth"><span>Login</span></router-link>
		    <router-link to="/dashboard" v-else><span>Dashboard</span></router-link>
	    </div>
    </div>
    <div class="container margin-to-mobile">
      <div class="row">
        <div class="col s12">
          <div class="bg-inscription"></div>
          <div class="title-description-inscription" :class="{ 'minify-margin-title' : show_form }">{{ title }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        show_form: 0,
      }
    },
    computed: {
      title: function () {
        switch (this.show_form) {
          case 0:
            return 'Acta de Capacitación'
          default:
            return 'Inscripción para empresarios'
            break
        }
      }
    },
  }
</script>

<style lang="scss" scoped>
  .nav-container-mobile {
    background: #3c4c95;
  }
</style>
