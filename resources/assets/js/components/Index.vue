<template>
	<div class="main-template">
		<div class="navbar-items hide-on-med-and-down">
	    <div class="item" id="home-item">
	    	<span @click="$root.goToView('home')">Inicio</span>
	    </div>
			<div class="item" id="info-item" @click="$root.goToView('info')">
				<span>¿Qué es?</span>
			</div>
			<div class="item" id="participate-item" @click="$root.goToView('participate')">
	    	<span>¿Quiénes participan?</span>
	    </div>
			<div class="item" id="search-item" @click="$root.goToView('we-search')">
				<span>¿Qué buscamos?</span>
			</div>
	    <div class="item" id="schedule-item" @click="$root.goToView('schedule')">
	    	<span>Cronograma</span>
	    </div>
			<div class="item" id="phase-item" @click="$root.goToView('phase')">
	    	<span>Fases</span>
	    </div>
	    <div class="item" id="award-item" @click="$root.goToView('awards')">
	    	<span>Premios</span>
	    </div>
			<div>
	    	<router-link to="/evaluate" class="item left"><span>Acta de Capacitación</span></router-link>
	    </div>
	    <div>
		    <router-link to="/login" class="item right" v-if="!$root.auth"><span>Login</span></router-link>
		    <router-link to="/dashboard" class="item right" v-else><span>Dashboard</span></router-link>
	    </div>
	  </div>
		<div class="show-on-medium-and-down hide-on-med-and-up nav-container-mobile">
			<span class="btn-mobile-menu" @click="$root.showMenu">|||</span>
			<span class="title-mobile-menu">Hackathon Montería</span>
		</div>
		<div class="navbar-items-mobile" id="mobile-nabvar-scroll" v-if="$root.show_mobile_menu" :class="{ 'show' : $root.show_mobile_menu }">
			<div class="close-menu-icon" @click="$root.showMenu">X</div>
			<div class="title-show-menu">Hackathon Montería</div>
			<div class="item" id="home-item">
	    	<span @click="$root.goToView('home')">Inicio</span>
	    </div>
			<div class="item" id="info-item" @click="$root.goToView('info')">
				<span>¿Qué es?</span>
			</div>
			<div class="item" id="participate-item" @click="$root.goToView('participate')">
	    	<span>¿Quiénes participan?</span>
	    </div>
			<div class="item" id="search-item" @click="$root.goToView('we-search')">
				<span>¿Qué buscamos?</span>
			</div>
	    <div class="item" id="schedule-item" @click="$root.goToView('schedule')">
	    	<span>Cronograma</span>
	    </div>
			<div class="item" id="schedule-item" @click="$root.goToView('phase')">
	    	<span>Fases</span>
	    </div>
	    <div class="item" id="award-item" @click="$root.goToView('awards')">
	    	<span>Premios</span>
	    </div>
			<div class="item">
		    <router-link to="/login" v-if="!$root.auth"><span>Login</span></router-link>
		    <router-link to="/dashboard" v-else><span>Dashboard</span></router-link>
	    </div>
		</div>
	  <div id="sections">
		  <home-section></home-section>
			<info-section></info-section>
			<participate-section></participate-section>
			<we-search-section></we-search-section>
		  <schedule-section></schedule-section>
			<phase-section></phase-section>
	    <awards-section></awards-section>
			<contact-section></contact-section>
			<terms v-if="$root.terms_status"></terms>
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
			this.$root.show_mobile_menu = false
    },
    destroyed(){
    	this.$root.scrollMagicClass.destroy()
    	this.$root.scrollMagicClass = null
    }
  }
</script>

<style lang="scss" scoped>

</style>
