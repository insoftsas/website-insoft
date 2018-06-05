<template lang="html">
  <GmapMap
    :center="{lat:8.7552672, lng:-75.8852908}"
    :zoom="19"
    map-type-id="terrain"
    style="height: 200px"
  >
  </GmapMap>
</template>

<script>
  import * as VueGoogleMaps from 'vue2-google-maps'
  Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyD5gvRb6Ukzsh6QHd_kvoX9qw2oKxzcvUI'
    }
  })
  export default {
    data() {
      return {
        
      }
    }
  }
</script>

<style lang="css">
</style>
