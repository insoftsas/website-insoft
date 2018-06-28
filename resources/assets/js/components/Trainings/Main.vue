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
      <div class="item" @click="backToRol"  v-if="form_selected != null">¿Este no es tu rol?</div>
      <div class="item">
        <router-link to="/login" v-if="!$root.auth"><span>Login</span></router-link>
        <router-link to="/dashboard" v-else><span>Dashboard</span></router-link>
      </div>
    </div>
    <div class="col s12  margin-to-mobile">
      <div class="title-description-inscription" v-if="form_selected == null">Seleccione su rol</div>
      <div class="roles-container" v-if="form_selected == null">
        <div class="col s12 m6 l4 offset-l2">
          <div class="select-rol" @click="selectForm(1)">Maker</div>
        </div>
        <div class="col s12 m6 l4">
          <div class="select-rol" @click="selectForm(2)">Empresa</div>
        </div>
      </div>
      <maker-training v-if="form_selected == 1"></maker-training>
      <enterprise-training v-if="form_selected == 2"></enterprise-training>
      <div class="help-actions">
        <router-link to="/"><div class="help-btn home">Volver al inicio</div></router-link>
        <div class="help-btn change" @click="backToRol" v-if="form_selected != null">¿Este no es tu rol?</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form_selected: null
    }
  },
  methods: {
    selectForm: function (f) {
      let vm = this
      if (f == 1) {
        vm.form_selected = f
      } else if (f == 2) {
        vm.form_selected = f
      } else {
        return
      }
    },
    backToRol: function () {
      this.form_selected = null
      this.$root.show_mobile_menu = false
    }
  }
}
</script>

<style lang="css">
</style>
