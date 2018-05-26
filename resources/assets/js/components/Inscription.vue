<template>
  <div>
	  <div class="">
      <div class="col s12 margin-default-bottom">
        <span class="info-inscription">Antes de llenar el formulario es importante que selecciones tu rol.</span>
      </div>
      <div class="col s12">
        <div class="container-rol-select">
          <div class="col s6 no-padding">
            <div class="rol-name" @click="showEnterpriseForm" :class="{'disabled' : form_to_show == 2}">
              <span>Empresa</span>
            </div>
          </div>
          <div class="col s6 no-padding">
            <div class="rol-name" @click="showMakerForm" :class="{'disabled' : form_to_show == 1}">
              <span>Dev - Maker</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 container-inscription">
        <form v-if="form_to_show == 1" class="form-inscription">
          <header>Formulario de preinscripción de empresas</header>
          <div class="col s12 body-form">
            <div class="containter-question col s12 razon_social_propietario">
              <label>Razón social o propietario * <span class="red-text" v-if="error.razon_social_propietario != null || error == undefined">{{ error.razon_social_propietario[0] }}</span></label>
              <input type="text" v-model="enterprises_data.razon_social_propietario" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 nit">
              <label>NIT * <span class="red-text" v-if="error.nit != null || error == undefined">{{ error.nit[0] }}</span></label>
              <input type="text" v-model="enterprises_data.nit" required :disabled="completed_registration" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 representante_legal">
              <label>Representante legal * <span class="red-text" v-if="error.representante_legal != null || error == undefined">{{ error.representante_legal[0] }}</span></label>
              <input type="text" v-model="enterprises_data.representante_legal" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 actividad_comercial">
              <label>Actividad Comercial * <span class="red-text" v-if="error.actividad_comercial != null || error == undefined">{{ error.actividad_comercial[0] }}</span></label>
              <input type="text" v-model="enterprises_data.actividad_comercial" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 sector_productivo">
              <label>Sector Productivo * <span class="red-text" v-if="error.sector_productivo != null || error == undefined">{{ error.sector_productivo[0] }}</span></label>
              <select class="browser-default" :disabled="completed_registration" v-model="enterprises_data.sector_productivo">
                <option selected disabled value="">Seleccione una opción</option>
                <option value="Agencias inmobiliarias">Agencias inmobiliarias</option>
                <option value="Hoteles y agencias turísticas">Hoteles y agencias turísticas</option>
                <option value="Constructoras">Constructoras</option>
                <option value="Restaurantes">Restaurantes</option>
                <option value="Servicios jurídicos y contables">Servicios jurídicos y contables</option>
                <option value="Industrias culturales y creativas">Industrias culturales y creativas</option>
              </select>
            </div>
            <div class="containter-question col s12 m6 city_id">
              <label>Municipio * <span class="red-text" v-if="error.city_id != null || error == undefined">{{ error.city_id[0] }}</span></label>
              <input type="text" v-model="enterprises_data.city_id" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 neigboard">
              <label>Barrio * <span class="red-text" v-if="error.neigboard != null || error == undefined">{{ error.neigboard[0] }}</span></label>
              <input type="text" v-model="enterprises_data.neigboard" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 phone">
              <label>Teléfono/Celular * <span class="red-text" v-if="error.phone != null || error == undefined">{{ error.phone[0] }}</span></label>
              <input type="number" v-model="enterprises_data.phone" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 address">
              <label>Dirección * <span class="red-text" v-if="error.address != null || error == undefined">{{ error.address[0] }}</span></label>
              <input type="text" v-model="enterprises_data.address" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 email">
              <label>Correo electrónico * <span class="red-text" v-if="error.email != null || error == undefined">{{ error.email[0] }}</span></label>
              <input type="text" v-model="enterprises_data.email" :disabled="completed_registration" required class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12">
              <p class="terms-check">
                <label>
                  <input type="checkbox" v-model="enterprises_data.terms" :disabled="completed_registration" required class="filled-in" />
                  <span>Acepto los terminos y condiciones</span>
                </label>
              </p>
            </div>
            <div class="containter-question col s12 center">
              <div v-if="completed_registration" class="completed">Inscripción completada</div>
              <button v-else @click.prevent="sendEnterprise" :disabled="!enterprises_data.terms || loading">{{ !loading ? 'Enviar' : 'Enviando...' }}</button>
            </div>
          </div>
        </form>
        <form v-if="form_to_show == 2" class="form-inscription">
          <header>Formulario de preinscripción de desarrolladores o makers</header>
          <div class="col s12 body-form">
            <div class="col s12">
              <span class="text-info-ins">Selecciona como quieres inscribirte</span>
            </div>
            <div class="containter-question col s12 m4 center">
              <button type="button" @click.prevent="indivualRegister" class="btn-select-ins" :class="{ 'disabled' : makers_data.new_group == 1 || add_to_group == true }">Indididual</button>
            </div>
            <div class="containter-question col s12 m4 center">
              <button type="button" @click.prevent="newGroup" class="btn-select-ins" :class="{ 'disabled' : makers_data.new_group == 0 || add_to_group == true }">Grupal</button>
            </div>
            <div class="containter-question col s12 m4 center">
              <button type="button" @click.prevent="addToGroup" class="btn-select-ins" :class="{ 'disabled' : makers_data.new_group == 1 || add_to_group == false }">Unirme a un grupo</button>
            </div>
          </div>
          <header>Datos personales</header>
          <div class="col s12 body-form">
            <div class="containter-question col s12 m6 first_name">
              <label>Nombres * <span class="red-text" v-if="error.first_name != null || error == undefined">{{ error.first_name[0] }}</span></label>
              <input type="text" v-model="makers_data.first_name" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 last_name">
              <label>Apellidos * <span class="red-text" v-if="error.last_name != null || error == undefined">{{ error.last_name[0] }}</span></label>
              <input type="text" v-model="makers_data.last_name" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 doc_type">
              <label>Tipo de Identificación * <span class="red-text" v-if="error.doc_type != null || error == undefined">{{ error.doc_type[0] }}</span></label>
              <select class="browser-default" v-model="makers_data.doc_type">
                <option selected disabled value="">Seleccione su tipo de identificación</option>
                <option value="TI">Tarjeta de identidad</option>
                <option value="CC">Cédula de ciudadanía</option>
                <option value="CE">Cédula de extranjería</option>
              </select>
            </div>
            <div class="containter-question col s12 m6 document">
              <label>Número de identificación * <span class="red-text" v-if="error.document != null || error == undefined">{{ error.document[0] }}</span></label>
              <input type="number" v-model="makers_data.document" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 genere">
              <label>Genero * <span class="red-text" v-if="error.genere != null || error == undefined">{{ error.genere[0] }}</span></label>
              <select class="browser-default" v-model="makers_data.genere">
                <option selected disabled value="">Seleccione su género</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="O">Otro</option>
                <option value="P">Prefiero no decirlo</option>
              </select>
            </div>
            <div class="containter-question col s12 m6 age">
              <label>Edad (16-30 años)<span class="red-text" v-if="error.age != null || error == undefined">{{ error.age[0] }}</span></label>
              <input type="number" v-model="makers_data.age" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 bird_date">
              <label>Fecha de nacimiento * <span class="red-text" v-if="error.bird_date != null || error == undefined">{{ error.bird_date[0] }}</span><span class="red-text" v-if="birt_date_fail">{{ error }}</span></label>
              <input type="text" id="bird_date" @change="setDate" v-model="makers_data.bird_date" class="datepicker browser-default input-hack" />
            </div>
            <div class="containter-question col s12 country">
              <label>País * <span class="red-text" v-if="error.country != null || error == undefined">{{ error.country[0] }}</span></label>
              <select class="browser-default" v-model="makers_data.country">
                <option selected disabled value="Colombia">Colombia</option>
              </select>
            </div>
            <div class="containter-question col s12 m6 departament_id">
              <label>Departamento * <span class="red-text" v-if="error.departament_id != null || error == undefined">{{ error.departament_id[0] }}</span></label>
              <select class="browser-default" v-model="makers_data.departament_id">
                <option selected disabled value="">Seleccione su departamento</option>
                <option value="1">Departamento 1</option>
                <option value="2">Departamento 2</option>
                <option value="3">Departamento 3</option>
                <option value="4">Departamento 4</option>
              </select>
            </div>
            <div class="containter-question col s12 m6 city_id">
              <label>Ciudad * <span class="red-text" v-if="error.city_id != null || error == undefined">{{ error.city_id[0] }}</span></label>
              <select class="browser-default" v-model="makers_data.city_id">
                <option selected disabled value="">Seleccione su ciudad</option>
                <option value="1">Ciudad 1</option>
                <option value="2">Ciudad 2</option>
                <option value="3">Ciudad 3</option>
                <option value="4">Ciudad 4</option>
              </select>
            </div>
            <div class="containter-question col s12 m6 email">
              <label>Correo electrónico * <span class="red-text" v-if="error.email != null || error == undefined">{{ error.email[0] }}</span></label>
              <input type="email" v-model="makers_data.email" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 phone">
              <label>Teléfono/Celular * <span class="red-text" v-if="error.phone != null || error == undefined">{{ error.phone[0] }}</span></label>
              <input type="number" v-model="makers_data.phone" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 level">
              <label>Nivel académico * <span class="red-text" v-if="error.level != null || error == undefined">{{ error.level[0] }}</span></label>
              <select class="browser-default" v-model="makers_data.level">
                <option selected disabled value="">Seleccione su nivel</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Profesional">Profesional</option>
                <option value="Técnico">Técnico</option>
                <option value="Tecnólogo">Tecnólogo</option>
              </select>
            </div>
            <div class="containter-question col s12 m6 semester" v-if="makers_data.level == 'Estudiante'">
              <label>Semestre que está cursando <span class="red-text" v-if="error.semester != null || error == undefined">{{ error.semester[0] }}</span></label>
              <input type="number" v-model="makers_data.semester" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 career">
              <label>Carrera * <span class="red-text" v-if="error.career != null || error == undefined">{{ error.career[0] }}</span></label>
              <input type="text" v-model="makers_data.career" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 m6 area">
              <label>Area * <span class="red-text" v-if="error.area != null || error == undefined">{{ error.area[0] }}</span></label>
              <input type="text" v-model="makers_data.area" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12 skills">
              <label>Habilidades * <span class="red-text" v-if="error.skills != null || error == undefined">{{ error.skills[0] }}</span></label>
              <textarea v-model="makers_data.skills" class="browser-default input-hack"></textarea>
            </div>
            <div class="containter-question col s12 bio">
              <label>Biografia <span class="red-text" v-if="error.bio != null || error == undefined">{{ error.bio[0] }}</span></label>
              <textarea v-model="makers_data.bio" class="browser-default input-hack"></textarea>
            </div>
          </div>
          <header v-if="makers_data.new_group == 1 || add_to_group == true">Datos del grupo</header>
          <div class="col s12 body-form" v-if="makers_data.new_group == 1 || add_to_group == true">
            <div class="containter-question col s12" v-if="makers_data.new_group == 1 && add_to_group == false">
              <label>Nombre del grupo * <span class="red-text" v-if="error.group_name != null || error == undefined">{{ error.group_name[0] }}</span></label>
              <input type="text" v-model="makers_data.group_name" class="browser-default input-hack" />
            </div>
            <div class="containter-question col s12" v-if="makers_data.new_group == 1 && add_to_group == false">
              <label>Descripción del grupo * <span class="red-text" v-if="error.group_description != null || error == undefined">{{ error.group_description[0] }}</span></label>
              <textarea v-model="makers_data.group_description" class="browser-default input-hack"></textarea>
            </div>
            <div class="containter-question col s12" v-if="makers_data.new_group == 0 && add_to_group == true">
              <label>Código del grupo * <span class="red-text" v-if="error.group_code != null || error == undefined">{{ error.group_code[0] }}</span><span class="red-text" v-if="code_not_found">{{ error_separated }}</span></label>
              <input type="text" v-model="makers_data.group_code" class="browser-default input-hack" />
            </div>
          </div>
          <div class="col s12 body-form">
            <div class="containter-question col s12">
              <p class="terms-check">
                <label>
                  <input type="checkbox" v-model="makers_data.terms" class="filled-in" />
                  <span>Acepto los terminos y condiciones</span>
                </label>
              </p>
            </div>
            <div class="containter-question col s12 center">
              <button type="submit" @click.prevent="sendMaker" :disabled="!makers_data.terms">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
	</div>
</template>
<script>
  export default {
    data() {
      return {
        form_to_show: 1,
        enterprises_data: {
          actividad_comercial: null,
          address: null,
          city_id: null,
          email: null,
          neigboard: null,
          nit: null,
          phone: null,
          razon_social_propietario: null,
          representante_legal: null,
          sector_productivo: '',
          rut: null,
          terms: false
        },
        makers_data: {
          first_name: null,
          last_name: null,
          doc_type: '',
          document: null,
          genere: '',
          age: null,
          bird_date: null,
          country: 'Colombia',
          departament_id: '',
          city_id: '',
          email: null,
          phone: null,
          level: '',
          semester: '',
          career: null,
          skills: null,
          terms: null,
          area: null,
          new_group: 0,
          bio: null,
          group_code: null
        },
        add_to_group: false,
        error: {
          razon_social_propietario: null,
          nit: null,
          representante_legal: null,
          actividad_comercial: null,
          sector_productivo: null,
          neigboard: null,
          address: null,
          first_name: null,
          last_name: null,
          doc_type: null,
          document: null,
          genere: null,
          age: null,
          bird_date: null,
          country: null,
          departament_id: null,
          city_id: null,
          email: null,
          phone: null,
          level: null,
          semester: null,
          career: null,
          skills: null,
          terms: null,
          area: null,
          new_group: null,
          bio: null
        },
        code_not_found: false,
        birt_date_fail: false,
        completed_registration: false,
        loading: false
      }
    },
    methods: {
      resetErrorValues: function () {
        this.error = {
          razon_social_propietario: null,
          nit: null,
          representante_legal: null,
          actividad_comercial: null,
          sector_productivo: null,
          neigboard: null,
          address: null,
          first_name: null,
          last_name: null,
          doc_type: null,
          document: null,
          genere: null,
          age: null,
          bird_date: null,
          country: null,
          departament_id: null,
          city_id: null,
          email: null,
          phone: null,
          level: null,
          semester: null,
          career: null,
          skills: null,
          terms: null,
          area: null,
          new_group: null,
          bio: null
        }
      },
      showEnterpriseForm: function () {
        this.form_to_show = 1
      },
      showMakerForm: function () {
        this.form_to_show = 2
        var options = {
          format: 'yyyy-mm-dd',
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 20,
        }
        Vue.nextTick()
          .then(function () {
            $('.datepicker').datepicker(options)
          })
      },
      indivualRegister: function () {
        this.makers_data.new_group = 0
        this.add_to_group = false
      },
      newGroup: function () {
        this.makers_data.new_group = 1
        this.add_to_group = false
      },
      addToGroup: function () {
        this.makers_data.new_group = 0
        this.add_to_group = true
      },
      sendEnterprise: function () {
        let vm = this
        vm.loading = !vm.loading
        axios.post('/api/enterprises', this.enterprises_data)
          .then(function (response) {
            vm.loading = !vm.loading
            console.log(response)
            vm.completed_registration = true
            vm.resetErrorValues()
          })
          .catch(function (error) {
            vm.loading = !vm.loading
            vm.completed_registration = false
            const e = error.response.data.errors
            vm.error = e
            vm.checkError(e)
          })
      },
      setDate: function () {
        let vm = this
        vm.makers_data.bird_date = document.getElementById('bird_date').value
      },
      goToChange: function (c) {
        document.getElementsByClassName(c)[0].scrollIntoView({behavior: 'smooth'})
      },
      checkError: function (e) {
        let vm = this
        switch (e[Object.keys(e)[0]]) {
          case e.razon_social_propietario:
            vm.goToChange('razon_social_propietario')
          break
          case e.nit:
            vm.goToChange('nit')
          break
          case e.representante_legal:
            vm.goToChange('representante_legal')
          break
          case e.actividad_comercial:
            vm.goToChange('actividad_comercial')
          break
          case e.sector_productivo:
            vm.goToChange('sector_productivo')
          break
          case e.neigboard:
            vm.goToChange('neigboard')
          break
          case e.address:
            vm.goToChange('address')
          break
          case e.first_name:
            vm.goToChange('first_name')
          break
          case e.last_name:
            vm.goToChange('last_name')
          break
          case e.doc_type:
            vm.goToChange('doc_type')
          break
          case e.document:
            vm.goToChange('document')
          break
          case e.genere:
            vm.goToChange('genere')
          break
          case e.age:
            vm.goToChange('age')
          break
          case e.bird_date:
            vm.goToChange('bird_date')
          break
          case e.country:
            vm.goToChange('country')
          break
          case e.departament_id:
            vm.goToChange('departament_id')
          break
          case e.city_id:
            vm.goToChange('city_id')
          break
          case e.email:
            vm.goToChange('email')
          break
          case e.phone:
            vm.goToChange('phone')
          break
          case e.level:
            vm.goToChange('level')
          break
          case e.semester:
            vm.goToChange('semester')
          break
          case e.career:
            vm.goToChange('career')
          break
          case e.skills:
            vm.goToChange('skills')
          break
          case e.terms:
            vm.goToChange('terms')
          break
          case e.area:
            vm.goToChange('area')
          break
          case e.new_group:
            vm.goToChange('new_group')
          break
          case e.bio:
            vm.goToChange('bio')
          break
        }
      },
      sendMaker: function () {
        let vm = this
        vm.loading = !vm.loading
        if (vm.add_to_group && (vm.makers_data.group_code == null || vm.makers_data.group_code == '')) {
          vm.code_not_found = true
          vm.error_separated = "Debe introducir el codigo que le asignaron a su grupo para continuar"
        } else {
          vm.code_not_found = false
          vm.error_separated = ''
        }
        axios.post('/api/makers', this.makers_data)
          .then(function (response) {
            vm.loading = !vm.loading
            vm.completed_registration = true
            vm.error_separated = null
            vm.resetErrorValues()
            vm.code_not_found = false
            vm.vm.birt_date_fail = false
          })
          .catch(function (error) {
            vm.loading = !vm.loading
            vm.completed_registration = false
            if (error.response.data.message == 'Codigo de grupo no encontrado') {
              vm.code_not_found = true
              vm.error_separated = error.response.data.message
              if (vm.birt_date_fail)
                vm.birt_date_fail = !vm.birt_date_fail
            } else if (error.response.data.message == 'La edad permitida para el evento es de 16-30 años de edad') {
              vm.birt_date_fail = true
              vm.error = error.response.data.message
              if (vm.code_not_found)
                vm.code_not_found = !vm.code_not_found
            } else {
              const e = error.response.data.errors
              vm.error = e
              vm.checkError(e)
            }
          })
      },
    },
    mounted() {

    }
  }
</script>

<style lang="scss" scoped>
  .terms-check {
    margin: 0;
    & [type="checkbox"].filled-in:checked + span:not(.lever):after {
      border: 2px solid #2196f3;
      background-color: #2196f3;
    }
  }
  .info-inscription {
    font-size: 1.3rem;
  }
  .rol-name {
    text-align: center;
    background: #ffffff;
    cursor: pointer;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    height: 50px;
    line-height: 50px;
    & span {
      font-size: 1rem;
      color: #2196f3;
      font-weight: bold;
      text-transform: uppercase;
    }
    &.disabled {
      & span {
        color: #bce1ff;
      }
    }
  }
  .form-inscription {
    & header {
      background: #2196f3;
      color: #fff;
      font-weight: bold;
      padding: .2em 1em;
    }
  }
  .body-form {
    background: #fff;
    padding: .5em 1em;
  }
  .input-hack {
    border-radius: 2px;
    border: 1px solid #ccc;
    padding: 5px;
    box-sizing: border-box;
    width: 100%;
    outline: none;
    &:focus {
      border: 1px solid #2196f3 !important;
    }
  }
  .text-info-ins {
    color: #071a31;
  }
  .containter-question {
    margin-bottom: 10px;
    & label {
      color: #071a31;
    }
    & select {
      background-color: #fff;
      width: 100%;
      padding: 2.5px 5px;
      border: 1px solid #ccc;
      border-radius: 2px;
      box-sizing: border-box;
      height: inherit;
      outline: none;
      &:focus {
        border: 1px solid #2196f3 !important;
      }
      &:disabled {
        background-color: #ebebe4;
      }
    }
    & textarea {
      &:disabled {
        background-color: #ebebe4;
      }
    }
    & button {
      border: 0;
      height: 30px;
      width: 200px;
      border-radius: 2px;
      background: #2196f3;
      color: #fff;
      font-weight: bold;
      cursor: pointer;
      &:disabled {
        background: #dddddd;
      }
    }
  }
  .btn-select-ins {
    margin: 10px 0;
    color: #2196f3 !important;
    background: transparent !important;
    border: 1px solid #cbe6ff !important;
    &:hover {
      border: 1px solid #2196f3 !important;
    }
    &:focus {
      color: darken(#2196f3, 10)
    }
    &.disabled {
      border: 1px solid #dddddd !important;
      background-color: transparent !important;
      color: #dddddd !important;
    }
  }
  .completed {
    background-color: #21f36d;
    color: #fff;
    font-weight: bold;
    padding: .2em 1em;
    border-radius: 0;
  }
</style>
