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
          <div class="title-description-inscription" :class="{ 'minify-margin-title' : show_form, 'margin-title-medium' : evaluate_status }">{{ title }}</div>
          <div v-if="!finished">
            <div class="col s12 no-padding container-forms fadeInAfter shadow" v-if="show_form">
              <header class="col s12 header-steps no-padding">
                <div class="step first">Datos personales</div>
              </header>
              <div class="col s12 no-padding form-enterprise">
                <form class="form-inscription" @submit="false">
                  <div class="col s12 body-form">
                    <div class="containter-question col s12 m6 l4 assistant">
                      <label>Nombre asistente * <span class="red-text" v-if="error.assistant != null || error == undefined">{{ error.assistant }}</span></label>
                      <input type="text" v-model="evaluate_data.assistant" required class="browser-default input-hack" />
                    </div>
                    <div class="containter-question col s12 m6 l4 doc_type">
                      <label>Tipo de Identificación * <span class="red-text" v-if="error.doc_type != null || error == undefined">{{ error.doc_type }}</span></label>
                      <select class="browser-default" v-model="evaluate_data.doc_type">
                        <option selected disabled value="">Seleccione su tipo de identificación</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="CC">Cédula de ciudadanía</option>
                        <option value="CE">Cédula de extranjería</option>
                      </select>
                    </div>
                    <div class="containter-question col s12 m6 l4 document">
                      <label>Número de identificación * <span class="red-text" v-if="error.document != null || error == undefined">{{ error.document }}</span></label>
                      <input :type="evaluate_data.doc_type != 'CE' ? 'number' : 'text' " v-model="evaluate_data.document" class="browser-default input-hack" />
                    </div>
                  </div>
                  <div class="col s12 body-form">
                    <div class="containter-question col s12 m6 l4 job">
                      <label>Cargo * <span class="red-text" v-if="error.job != null || error == undefined">{{ error.job }}</span></label>
                      <input type="text" v-model="evaluate_data.job" required class="browser-default input-hack" />
                    </div>
                    <div class="containter-question col s12 m6 l4 enterprise">
                      <label>Nombre de la empresa * <span class="red-text" v-if="error.enterprise != null || error == undefined">{{ error.enterprise }}</span></label>
                      <input type="text" v-model="evaluate_data.enterprise" required class="browser-default input-hack" />
                    </div>
                    <div class="containter-question col s12 m6 l4 nit">
                      <label>NIT * <span class="red-text" v-if="error.nit != null || error == undefined">{{ error.nit }}</span></label>
                      <input type="text" v-model="evaluate_data.nit" required class="browser-default input-hack" />
                    </div>
                  </div>
                  <div class="col s12 body-form">
                    <div class="containter-question col s12 m6 address">
                      <label>Dirección * <span class="red-text" v-if="error.address != null || error == undefined">{{ error.address }}</span></label>
                      <input type="text" v-model="evaluate_data.address" required class="browser-default input-hack" />
                    </div>
                    <div class="containter-question col s12 m6 neighborhood">
                      <label>Barrio * <span class="red-text" v-if="error.neighborhood != null || error == undefined">{{ error.neighborhood }}</span></label>
                      <input type="text" v-model="evaluate_data.neighborhood" required class="browser-default input-hack" />
                    </div>
                  </div>
                  <div class="col s12 body-form">
                    <div class="containter-question col s12 m6 departament_id">
                      <label>Departamento * <span class="red-text" v-if="error.departament_id != null || error == undefined">{{ error.departament_id }}</span></label>
                      <select class="browser-default" @change="getCities(1)" v-model="evaluate_data.departament_id">
                        <option selected disabled value="">Seleccione su departamento</option>
                        <option :value="state.id" v-for="(state, index) in states">{{ state.name }}</option>
                      </select>
                    </div>
                    <div class="containter-question col s12 m6 city_id">
                      <label>Ciudad * <span class="red-text" v-if="error.city_id != null || error == undefined">{{ error.city_id }}</span></label>
                      <select class="browser-default" :disabled="evaluate_data.departament_id == ''" v-model="evaluate_data.city_id">
                        <option selected disabled value="">Seleccione su ciudad</option>
                        <option :value="city.id" v-for="(city, index) in cities">{{ city.name }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="col s12 body-form">
                    <div class="containter-question col s12 m6 cellphone">
                      <label>Teléfono/Celular * <span class="red-text" v-if="error.cellphone != null || error == undefined">{{ error.cellphone }}</span></label>
                      <input type="number" v-model="evaluate_data.cellphone" required class="browser-default input-hack" />
                    </div>
                    <div class="containter-question col s12 m6 email">
                      <label>Correo electrónico * <span class="red-text" v-if="error.email != null || error == undefined">{{ error.email }}</span></label>
                      <input type="text" v-model="evaluate_data.email" required class="browser-default input-hack" />
                    </div>
                    <div class="containter-question col s12 center">
                      <button @click.prevent="toContinue">Continuar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="evaluate" v-else>
              <div class="thematics-container" v-if="!evaluate_status">
                <topic-training class="fadeInAfter" v-if="step_topic == 1"></topic-training>
                <topic-training class="fadeInAfter" v-if="step_topic == 2"></topic-training>
                <topic-training class="fadeInAfter" v-if="step_topic == 3"></topic-training>
                <topic-training class="fadeInAfter" v-if="step_topic == 4"></topic-training>
              </div>
              <div class="evaluate-container" v-else>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 1" number-item="1.1" title-event="Contenido"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 2" number-item="1.2" title-event="Importancia de los temas tratados"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 3" number-item="1.3" title-event="Presentación y legibilidad"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 4" number-item="2.1" title-event="Dominio del tema"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 5" number-item="2.2" title-event="Disposición para inquietudes"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 6" number-item="2.3" title-event="Aclaración de inquietudes"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 7" number-item="3.1" title-event="Utilización de recursos didácticos"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 8" number-item="3.2" title-event="Recomendaciones bibliográficas"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 9" number-item="4.1" title-event="Confort (iluminación, sonido y comodidad)"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 10" number-item="4.2" title-event="Disponibilidad de internet"></evaluate-training>
                <evaluate-training class="fadeInAfter" v-if="step_evaluate == 11" number-item="4.3" title-event="Atención por parte del personal encargado"></evaluate-training>
              </div>
            </div>
          </div>
          <div class="finished" v-else>
            <div>Muchas gracias por asistir a la capacitación.</div>
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
          assistant: '',
          doc_type: '',
          document: '',
          job: '',
          enterprise: '',
          nit: '',
          address: '',
          neighborhood: '',
          departament_id: '',
          city_id: '',
          cellphone: '',
          email: '',
          // topics
          topic_1: false,
          topic_2: false,
          topic_3: false,
          topic_4: false,
          // events
          event_1: 0,
          event_2: 0,
          event_3: 0,
          // speaker
          speaker_1: 0,
          speaker_2: 0,
          speaker_3: 0,
          // guides
          guides_1: 0,
          guides_2: 0,
          // logistics
          logistics_1: 0,
          logistics_2: 0,
          logistics_3: 0
        },
        error: {
          assistant: '',
          doc_type: '',
          document: '',
          job: '',
          enterprise: '',
          nit: '',
          address: '',
          neighborhood: '',
          departament_id: '',
          city_id: '',
          cellphone: '',
          email: ''
        },
        states: [
          { id: null, name: null}
        ],
        cities: [
          { id: null, name: null}
        ],
        step_topic: 1,
        step_evaluate: 1,
        error_status: {
          assistant: false,
          doc_type: false,
          document:false,
          job: false,
          enterprise: false,
          nit: false,
          address: false,
          neighborhood: false,
          departament_id: false,
          city_id: false,
          cellphone: false,
          email: false
        },
        finished: false
      }
    },
    computed: {
      title: function () {
        if (this.show_form) {
            return 'Acta de Capacitación'
        } else if (!this.evaluate_status && !this.finished) {
          return 'Seleccione las temáticas abordadas por el capacitador:'
        } else {
          if (this.step_evaluate >= 1 && this.step_evaluate <= 3) {
            return '1. Evento'
          } else if (this.step_evaluate >= 4 && this.step_evaluate <= 6) {
            return '2. Capacitador'
          } else if (this.step_evaluate >= 7 && this.step_evaluate <= 8) {
            return '3. Guías y materiales'
          } else {
            if (!this.finished)
              return '4. Logística'
            else
              return 'Finalizado'
          }
        }
      },
      contentTopic: function () {
        switch (this.step_topic) {
          case 1:
            return `<span class="break-line">Claves para comenzar la Transformación Digital en mi empresa.</span>
                    <span>Madurez digital, nuevos modelos de negocio, Estrategia digital, Hoja de ruta, Monetización de la estrategia, etc.</span>`
            break
          case 2:
            return `<span class="break-line">El cliente del siglo XXI.</span>
                    <span>Caracteristicas, desafíos, canales de comunicación, etc.</span>`
            break
          case 3:
            return `<span class="break-line">Talento Digital.</span>
                    <span>Cultura organizacional, liderazgo y adquisión de nuevos talentos para la empresa.</span>`
            break
          case 4:
            return `<span class="break-line">Tecnologías para la realidad de mi empresa.</span>
                    <span>Internet de las cosas, cloud computing, redes sociales, inteligencia artificial, CRM, Oficina virtual, etc.</span>`
            break
          default:
        }
      }
    },
    methods: {
      goToChange: function (c) {
        document.getElementsByClassName(c)[0].scrollIntoView({behavior: 'smooth'})
      },
      setError: function (e, v) {
        let vm = this
        switch (e) {
          case 'assistant':
            if (v)
              vm.error.assistant = 'Digite su nombre'
            vm.goToChange('assistant')
          break
          case 'doc_type':
            if (v)
              vm.error.doc_type = 'Seleccione su tipo de documento'
            vm.goToChange('doc_type')
          break
          case 'document':
            if (v)
              vm.error.document = 'Digite el número de documento'
            else
              vm.error.document = 'El documento tiene un formato invalido'
            vm.goToChange('document')
          break
          case 'job':
            if (v)
              vm.error.job = 'Digite su cargo'
            vm.goToChange('job')
          break
          case 'enterprise':
            if (v)
              vm.error.enterprise = 'Digite el nombre de su empresa'
            vm.goToChange('enterprise')
          break
          case 'nit':
            if (v)
              vm.error.nit = 'Digite el nit de la empresa'
            else
              vm.error.nit = 'El nit ingresado tiene un formato invalido'
            vm.goToChange('nit')
          break
          case 'address':
            if (v)
              vm.error.address = 'Digite la dirección de la empresa'
            vm.goToChange('address')
          break
          case 'neighborhood':
            if (v)
              vm.error.neighborhood = 'Digite el barrio'
            vm.goToChange('neighborhood')
          break
          case 'departament_id':
            if (v)
              vm.error.departament_id = 'Seleccione un departamento'
            vm.goToChange('departament_id')
          break
          case 'city_id':
            if (v)
              vm.error.city_id = 'Seleccione una ciudad'
            vm.goToChange('city_id')
          break
          case 'cellphone':
            if (v)
              vm.error.cellphone = 'Digite el número de telefono'
            vm.goToChange('cellphone')
          break
          case 'email':
            if (v)
              vm.error.email = 'Digite el correo electronico'
            else
              vm.error.email = 'Correo electronico invalido'
            vm.goToChange('email')
          break
        }
      },
      checkInputs: function () {
        let vm = this
        let i = vm.evaluate_data

        if (i.assistant == '') {
          vm.setError('assistant', true)
          vm.error_status.assistant = true
        } else {
          vm.error.assistant = null
          vm.error_status.assistant = false
        }

        if (i.doc_type == '') {
          vm.setError('doc_type', true)
          vm.error_status.doc_type = true
        } else {
          vm.error.doc_type = null
          vm.error_status.doc_type = false
        }

        if (i.document == '') {
          vm.setError('document', true)
          vm.error_status.document = true
        } else {
          switch (i.doc_type) {
            case 'TI':
              var regex_ti = new RegExp(/^[1-9][0-9]{4,11}$/)
              if (regex_ti.test(i.document)) {
                vm.error.document = null
                vm.error_status.document = false
              } else {
                vm.error_status.document = true
                vm.setError('document', false)
              }
              break
            case 'CE':
              var regex_ce = new RegExp(/^([a-zA-Z]{1,5})?[1-9][0-9]{3,7}$/)
              if (regex_ce.test(i.document)) {
                vm.error.document = null
                vm.error_status.document = false
              } else {
                vm.error_status.document = true
                vm.setError('document', false)
              }
              break
            default:
              var regex_cc = new RegExp(/^[1-9][0-9]{4,9}$/)
              if (regex_cc.test(i.document)) {
                vm.error.document = null
                vm.error_status.document = false
              } else {
                vm.error_status.document = true
                vm.setError('document', false)
              }
              break
          }
        }

        if (i.job == '') {
          vm.setError('job', true)
          vm.error_status.job = true
        } else {
          vm.error.job = null
          vm.error_status.job = false
        }

        if (i.enterprise == '') {
          vm.setError('enterprise', true)
          vm.error_status.enterprise = true
        } else {
          vm.error.enterprise = null
          vm.error_status.enterprise = false
        }

        if (i.nit == '') {
          vm.setError('nit', true)
          vm.error_status.nit = true
        } else {
          var regex_nit = new RegExp(/^[1-9][0-9]{6,8}(\\-[0-9])?$/)
          if (regex_nit.test(parseInt(i.nit))) {
            vm.error.nit = null
            vm.error_status.nit = false
          } else {
            vm.error_status.nit = true
            vm.setError('nit', false)
          }
        }

        if (i.address == '') {
          vm.setError('address', true)
          vm.error_status.address = true
        } else {
          vm.error.address = null
          vm.error_status.address = false
        }

        if (i.neighborhood == '') {
          vm.setError('neighborhood', true)
          vm.error_status.neighborhood = true
        } else {
          vm.error.neighborhood = null
          vm.error_status.neighborhood = false
        }

        if (i.departament_id == '') {
          vm.setError('departament_id', true)
          vm.error_status.departament_id = true
        } else {
          vm.error.departament_id = null
          vm.error_status.departament_id = false
        }

        if (i.city_id == '') {
          vm.setError('city_id', true)
          vm.error_status.city_id = true
        } else {
          vm.error.city_id = null
          vm.error_status.city_id = false
        }

        if (i.cellphone == '') {
          vm.setError('cellphone', true)
          vm.error_status.cellphone = true
        } else {
          vm.error.cellphone = null
          vm.error_status.cellphone = false
        }

        if (i.email == '') {
          vm.setError('email', true)
          vm.error_status.email = true
        } else {
          var regex_email = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)
          if (regex_email.test(i.email)) {
            vm.error.email = null
            vm.error_status.email = false
          } else {

            vm.error_status.email = true
            vm.setError('email', false)
          }

        }

        if (!vm.hasErrors()) {
          vm.show_form = false
        }
      },
      hasErrors: function () {
        let e = this.error_status
        if (e.assistant || e.doc_type || e.document || e.job || e.enterprise || e.nit || e.address || e.neighborhood || e.departament_id || e.city_id || e.cellphone || e.email) {
          return true
        }
        return false
      },
      toContinue: function () {
        let vm = this
        vm.checkInputs()
      },
      sendEvaluate: function () {
        let vm = this
        const nit_int = parseInt(vm.evaluate_data.nit)
        vm.evaluate_data.nit = nit_int
        axios.post('/api/qualifies', vm.evaluate_data)
          .then(function (response) {
            vm.finished = true
            vm.evaluate_status = false
            console.log('Qualifies send successfully')
          })
          .catch(function (error) {
            console.log(error)
          })
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
  .margin-title-medium {
    margin: 2em 0;
  }
  .thematics-container {
    text-align: center;
  }
  .finished {
    text-align: center;
    color: #fff;
    font-weight: bold;
    font-size: 1.5rem;
  }
</style>
