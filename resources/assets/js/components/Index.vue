<template>
	<div class="main-template">
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
	    <div class="item" id="conctact-item" @click.prevent="$root.goToView('conctact')">
	    	<span>Contacto</span>
	    </div>
	    <div>
		    <router-link to="/login" class="item right" v-if="!$root.auth"><span>Login</span></router-link>
		    <router-link to="/dashboard" class="item right" v-else><span>Dashboard</span></router-link>
	    </div>
	  </div>
		<div class="show-on-medium-and-down hide-on-med-and-up nav-container-mobile">
			<span class="btn-mobile-menu" @click="$root.showMenu">|||</span>
			<span class="title-mobile-menu">Hackaton Montería</span>
		</div>
		<div class="navbar-items-mobile" v-if="$root.show_mobile_menu" :class="{ 'show' : $root.show_mobile_menu }">
			<div class="close-menu-icon" @click="$root.showMenu">X</div>
			<div class="title-show-menu">Hackaton Montería</div>
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
	    <div class="item" id="conctact-item" @click.prevent="$root.goToView('conctact')">
	    	<span>Contacto</span>
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
	.nav-container-mobile {
		position: fixed;
	  color: #fff;
	  top: 0px;
	  left: 0px;
	  letter-spacing: 5px;
		background: linear-gradient(99deg, #17688e, #0f8190);
	  width: 100%;
	  height: 56px;
	  z-index: 4;
		&.addBg {
			background: url(../../images/banner-title.png) !important;
			background-position: -289px center !important;
			background-size: cover;
			background-repeat: no-repeat;
		}
		& .btn-mobile-menu {
			font-size: 1.2rem;
			-webkit-transform: rotate(90deg);
			transform: rotate(90deg);
			position: absolute;
			top: 18px;
			left: 10px;
		}
	}
	.title-mobile-menu {
		transform: translateX(-50%);
		position: absolute;
		left: 50%;
		font-size: 1rem;
		// width: calc(100% - 70px);
		text-align: center;
		top: 7px;
		font-weight: 600;
		text-transform: uppercase;
		color: #fff;
		letter-spacing: 5px;
	}
	.title-show-menu {
		font-size: 1.5rem;
		letter-spacing: 2px;
		font-weight: bold;
		width: 100%;
		top: 0px;
		text-transform: uppercase;
		color: #fff;
		text-align: center;
		height: 56px;
		line-height: 56px;
		position: relative;
	}
	.close-menu-icon {
		color: #fff;
		font-size: 2rem;
		position: absolute;
		top: 0;
		right: 0;
		width: 100%;
		height: 60px;
		text-align: right;
		padding-right: 23px;
		padding-top: 6px;
	}
	.navbar-items-mobile {
		position: fixed;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		z-index: 20;
		padding-top: 60px;
		background: #05a4ea;
		transform: translateX(0%);
		animation: moveMenu .5s ease;
		& .item {
	    color: #fff;
	    font-weight: bold;
	    text-align: left;
	    font-size: 1.5rem;
	    margin: 10px 20px;
		}
		&.show {
			transform: translateX(0%);
		}
	}
</style>
