<template>
  <div>
	  <div class=""></div>
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
      axios.post('/api/makers', {
        params: {
          ID: 12345
        }
      })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        })
    }
  }
</script>

<style lang="scss" scoped>
 
</style>
