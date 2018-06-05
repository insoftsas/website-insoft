<template>
  <div>
    <div id="delete_modal" class="modal">
      <div class="modal-content">
        <h4>¿Seguro que desea eliminar {{ data.text }}?</h4>
        <p><b>ID:</b> {{ data.content.id }}</p>
        <p v-if="data.content.nit != undefined "><b>NIT:</b> {{ data.content.nit }}</p>
        <p v-if="data.content.doc_type != undefined && data.content.document != undefined"><b>Documento:</b> {{ data.content.doc_type + ' ' + data.content.document }}</p>
        <p v-if="data.content.FullName != undefined "><b>Nombre:</b> {{ data.content.FullName }}</p>
        <p v-if="data.content.name != undefined "><b>Nombre:</b> {{ data.content.name }}</p>
        <p v-if="data.content.razon_social_propietario != undefined "><b>Razon Social:</b> {{ data.content.razon_social_propietario }}</p>
        <p v-if="data.content.email != undefined "><b>Correo:</b> {{ data.content.email }}</p>
      </div>
      <div class="modal-footer">
        <a class="modal-close waves-effect btn-flat" :disabled="loading">Cancelar</a>
        <a class="waves-effect waves-light btn red" :disabled="loading" @click="requestDelete"><span :class="{'hidde' : loading}">Eliminar</span><font-awesome-icon v-if="loading" class="fa-spin icon_loader" :icon="['fas', 'circle-notch']"/></a>
      </div>
    </div>
	</div>
</template>
<script>
  export default {
    data() {
      return {
        loading: false,
        data: {
          text: '',
          route: '',
          content: {

          }
        }
      }
    },
    methods: {
      requestDelete: function(){
        let vm = this
        vm.loading = true
        axios.delete('/api/' + vm.data.route + '/' + vm.data.content.id)
        .then(response => {
          $('#delete_modal').modal('close');
          M.toast({html: response.data.message})
          vm.$root.$emit('update-data', vm.data)
        })
        .catch(error =>{
          M.toast({html: error.response.data.message})
        })
        .then(()=>{
          vm.loading = false
        })
      }
    },
    mounted() {
      let vm = this
      $('#delete_modal').modal({
        dismissible: false
      });
      vm.$root.$on('delete-data', function (data) {
        vm.data = data
        $('#delete_modal').modal('open');
      })
    }
  }
</script>

<style lang="scss" scoped>
.hidde{
  opacity: 0!important;
}
.icon_loader{
  left: 0px;
  height: 100%;
  padding: 8px;
  position: absolute;
  width: 100%;
}
.btn{
  position: relative;
  & span{
    /*transition: .2s ease;*/
    opacity: 1;
  }
}
</style>
