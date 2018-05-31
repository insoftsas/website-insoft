<template>
  <div class="row">
    <div :class="{'bg_panel' : $route.name != 'Index' && $route.name != 'Inscription'}"></div>
	  <router-view v-if="$root.loaded"></router-view>
      <div class="MainLoader"  v-else>
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
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

      }
    },
    methods: {

    },
    mounted() {
    }
  }
</script>

<style lang="scss" scoped>
 .MainLoader{
    position: absolute;
    right: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
 }
 .row {
   margin-bottom: 0;
 }
</style>
