<template>
  <div class="content-menu" v-if="$root.show_menu">
    <div class="menu">
      <a href="#!">Inicio</a>
      <a href="#!">Jurados</a>
      <a href="#!">Capacitadores</a>
      <a href="#!">Ruta del proyecto</a>
      <a href="#!">Lugar evento</a>
      <a href="#!">¿Cómo llegar?</a>
      <a href="#!">Cupos</a>
      <a href="#!">Inscripción</a>
      <a href="#!">Retos</a>
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
    }
  }
</script>

<style lang="scss" scoped>
  .content-menu {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    z-index: 5;
    left: 0;
    top: 0;
  }
  .menu {
    text-align: left;
    top: 50%;
    left: 50%;
    transform: translateY(-50%) translateX(-50%);
    position: absolute;
    & a {
      font-size: 3rem;
      font-weight: 600;
      color: #fefe53;
      display: block;
      text-transform: capitalize;
      padding: 0 10px;
      border-left: 20px solid transparent;
      &:hover {
        border-left: 20px solid;
        background: #69682a;
        animation: parpadeoY 1s step-end infinite;
      }
    }
  }
</style>
