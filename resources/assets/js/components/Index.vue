<template>
	<div>
		<div class="navbar-items hide-on-med-and-down">
	    <div class="item" id="home-item">
	    	<span @click.prevent="$root.goToView('home')">Inicio</span>
	    </div>
			<div class="item" id="info-item" @click.prevent="$root.goToView('info')">
				<span>¿Qué es?</span>
			</div>
			<div class="item" id="participate-item" @click.prevent="$root.goToView('participate')">
	    	<span>¿Quiénes participan?</span>
	    </div>
			<div class="item" id="search-item" @click.prevent="$root.goToView('we-search')">
				<span>¿Qué buscamos?</span>
			</div>
	    <div class="item" id="schedule-item" @click.prevent="$root.goToView('schedule')">
	    	<span>Cronograma</span>
	    </div>
	    <!--<div class="item" id="award-item" @click.prevent="$root.goToView('awards')">
	    	<span>Premios</span>
	    </div>-->
	    <!--<div class="item" id="judge-item" @click.prevent="$root.goToView('judges')">
	    	<span>Jurados</span>
	    </div>-->
	    <div class="item" id="conctact-item" @click.prevent="$root.goToView('conctact')">
	    	<span>Contacto</span>
	    </div>
	    <div>
		    <router-link to="/login" class="item right" v-if="!$root.auth"><span>Login</span></router-link>
		    <router-link to="/dashboard" class="item right" v-else><span>Dashboard</span></router-link>
	    </div>
	  </div>
	  <div id="sections">
		  <home-section></home-section>
			<info-section></info-section>
			<participate-section></participate-section>
			<we-search-section></we-search-section>
		  <schedule-section></schedule-section>
	    <!--<awards-section></awards-section>-->
			<contact-section></contact-section>
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
    	this.$root.scrollMagicClass = new scrollIndex.default()
    	var flag=document.querySelector(".flag");
			TweenMax.set(flag, {x: 65})
			TweenMax.to(flag, 2, {x: 0, repeat:-1,ease:Linear.easeNone});
    },
    destroyed(){
    	this.$root.scrollMagicClass.destroy()
    	this.$root.scrollMagicClass = null
    }
  }
</script>

<style lang="scss" scoped>

</style>
