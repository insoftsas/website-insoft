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
          <div class="col s12 no-padding container-forms fadeInAfter shadow" v-if="show_form">
            <header class="col s12 header-steps no-padding">
              <div class="step first">Datos personales</div>
            </header>
            <div class="col s12 no-padding form-enterprise">
              <form class="form-inscription">
                <div class="col s12 body-form">
                  <div class="containter-question col s12 m6 l4 razon_social_propietario">
                    <label>Nombre asistente * <span class="red-text" v-if="error.name != null || error == undefined">{{ error.name[0] }}</span></label>
                    <input type="text" v-model="evaluate_data.name" required class="browser-default input-hack" />
                  </div>
                  <div class="containter-question col s12 m6 l4 doc_type">
                    <label>Tipo de Identificación * <span class="red-text" v-if="error.doc_type != null || error == undefined">{{ error.doc_type[0] }}</span></label>
                    <select class="browser-default" v-model="evaluate_data.doc_type">
                      <option selected disabled value="">Seleccione su tipo de identificación</option>
                      <option value="TI">Tarjeta de identidad</option>
                      <option value="CC">Cédula de ciudadanía</option>
                      <option value="CE">Cédula de extranjería</option>
                    </select>
                  </div>
                  <div class="containter-question col s12 m6 l4 document">
                    <label>Número de identificación * <span class="red-text" v-if="error.document != null || error == undefined">{{ error.document[0] }}</span></label>
                    <input type="number" v-model="evaluate_data.document" class="browser-default input-hack" />
                  </div>
                </div>
                <div class="col s12 body-form">
                  <div class="containter-question col s12 m6 l4 razon_social_propietario">
                    <label>Cargo * <span class="red-text" v-if="error.position != null || error == undefined">{{ error.position[0] }}</span></label>
                    <input type="text" v-model="evaluate_data.position" required class="browser-default input-hack" />
                  </div>
                  <div class="containter-question col s12 m6 l4 razon_social_propietario">
                    <label>Nombre de la empresa * <span class="red-text" v-if="error.company_name != null || error == undefined">{{ error.company_name[0] }}</span></label>
                    <input type="text" v-model="evaluate_data.company_name" required class="browser-default input-hack" />
                  </div>
                  <div class="containter-question col s12 m6 l4 nit">
                    <label>NIT * <span class="red-text" v-if="error.nit != null || error == undefined">{{ error.nit[0] }}</span></label>
                    <input type="text" v-model="evaluate_data.nit" required class="browser-default input-hack" />
                  </div>
                </div>
                <div class="col s12 body-form">
                  <div class="containter-question col s12 m6 representante_legal">
                    <label>Dirección * <span class="red-text" v-if="error.address != null || error == undefined">{{ error.address[0] }}</span></label>
                    <input type="text" v-model="evaluate_data.address" required class="browser-default input-hack" />
                  </div>
                  <div class="containter-question col s12 m6 neigboard">
                    <label>Barrio * <span class="red-text" v-if="error.neigboard != null || error == undefined">{{ error.neigboard[0] }}</span></label>
                    <input type="text" v-model="evaluate_data.neigboard" required class="browser-default input-hack" />
                  </div>
                </div>
                <div class="col s12 body-form">
                  <div class="containter-question col s12 m6 departament_id">
                    <label>Departamento * <span class="red-text" v-if="error.departament_id != null || error == undefined">{{ error.departament_id[0] }}</span></label>
                    <select class="browser-default" @change="getCities(1)" v-model="evaluate_data.departament_id">
                      <option selected disabled value="">Seleccione su departamento</option>
                      <option :value="state.id" v-for="(state, index) in states">{{ state.name }}</option>
                    </select>
                  </div>
                  <div class="containter-question col s12 m6 city_id">
                    <label>Ciudad * <span class="red-text" v-if="error.city_id != null || error == undefined">{{ error.city_id[0] }}</span></label>
                    <select class="browser-default" :disabled="evaluate_data.departament_id == ''" v-model="evaluate_data.city_id">
                      <option selected disabled value="">Seleccione su ciudad</option>
                      <option :value="city.id" v-for="(city, index) in cities">{{ city.name }}</option>
                    </select>
                  </div>
                </div>
                <div class="col s12 body-form">
                  <div class="containter-question col s12 m6 phone">
                    <label>Teléfono/Celular * <span class="red-text" v-if="error.phone != null || error == undefined">{{ error.phone[0] }}</span></label>
                    <input type="number" v-model="evaluate_data.phone" required class="browser-default input-hack" />
                  </div>
                  <div class="containter-question col s12 m6 email">
                    <label>Correo electrónico * <span class="red-text" v-if="error.email != null || error == undefined">{{ error.email[0] }}</span></label>
                    <input type="text" v-model="evaluate_data.email" required class="browser-default input-hack" />
                  </div>
                  <div class="containter-question col s12 center">
                    <button @click.prevent="toContinue">Continuar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="fadeInAfter" v-else>
            <div class="thematics-container">
              <div class="thematic">
                <div class="number-thematic">1</div>
                <div class="content-thematic">
                  <span>Claves para comenzar la Transformación Digital en mi empresa.</span>
                  <span>Madurez digital, nuevos modelos de negocio, Estrategia digital, Hoja de ruta, Monetización de la estrategia, etc.</span>
                </div>
              </div>
              <div class="roles-container">
                <div class="col s12 m6 l4 offset-l2">
                  <div class="select-rol business-select">Si se abordo</div>
                </div>
                <div class="col s12 m6 l4">
                  <div class="select-rol dev-select">No se abordo</div>
                </div>
              </div>
            </div>
          </div>
          <div class="help-actions">
            <router-link to="/"><div class="help-btn home">Volver al inicio</div></router-link>
          </div>
          <div class="col s12">
            <div class="copy">© 2018 Innovemp</div>
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
        show_form: true,
        evaluate_status: false,
        evaluate_data: {
          name: '',
          doc_type: '',
          document: '',
          position: '',
          company_name: '',
          nit: '',
          address: '',
          neigboard: '',
          departament_id: '',
          city_id: '',
          phone: '',
          email: ''
        },
        error: {
          name: '',
          doc_type: '',
          document: '',
          position: '',
          company_name: '',
          nit: '',
          address: '',
          neigboard: '',
          departament_id: '',
          city_id: '',
          phone: '',
          email: ''
        },
        states: [
          { id: null, name: null}
        ],
        cities: [
          { id: null, name: null}
        ],
      }
    },
    computed: {
      title: function () {
        if (this.show_form) {
            return 'Acta de Capacitación'
        } else {
          if (!this.evaluate_status) {
            return 'Seleccione las temáticas abordadas por el capacitador:'
          } else {
            return 'Seleccione las temáticas abordadas por el capacitador:'
          }
        }
      }
    },
    methods: {
      toContinue: function () {
        let vm = this
        vm.show_form = false

      },
      getCities: function () {
        let vm = this
        vm.evaluate_data.city_id = ''
        let state
        state = vm.evaluate_data.departament_id

        axios.post('/api/cities', {
          state
        })
          .then(function (response) {
            vm.cities = response.data.data
          })
          .catch(function (error) {
            console.log(error)
          })
      },
      getStates: function () {
        let vm = this
        axios.get('/api/states')
          .then(function (response) {
            vm.states = response.data.data
          })
          .catch(function (error) {
            vm.getStates()
          })
      }
    },
    mounted() {
      this.$root.show_mobile_menu = false
      this.getStates()
    }
  }
</script>

<style lang="scss" scoped>
  .nav-container-mobile {
    background: #3c4c95;
  }
  .thematics-container {
    text-align: center;
    & .thematic {
      display: inline-block;
      & .number-thematic {
        display: inline-block;
        width: 40px;
        text-align: center;
        font-weight: bold;
        color: #fff;
        font-size: 3rem;
      }
      & .content-thematic {
        display: inline-block;
        text-align: left;
        padding: 10px 18px;
        font-weight: bold;
        color: #fbfcfd;
        & span {
          display: block;
        }
      }
    }
  }
  .title-description-inscription {
    margin: 3em 0;
  }
  .roles-container {
    margin-top: 40px;
  }
</style>
