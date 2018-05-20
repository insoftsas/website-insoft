<template>
  <div class="row">
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
</style>
