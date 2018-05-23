<template>
  <div>
    <div class="valign-wrapper" style="width:100%;height:100%;position: absolute;">
      <div class="valign" style="width:100%;">
          <div class="container">
             <div class="row">
                <div class="col s12 m6 offset-m3">
                   <div id="login_card" class="card" style="opacity:0; transform:scale(0.8);">
                      <div class="bg" style="z-index: -1;border-radius: 100%; transform: scale(0); background-color: white; opacity: 0; height: 100%;width: 100%; position: absolute;"></div>
                      <div class="card-content">
                         <span class="card-title grey-text">Hackathon</span>
                         <form @submit.prevent="login">
                            <div class="row">
                               <div class="input-field col s12">
                                  <input v-validate="'required|email'" placeholder="example@correo.com" id="email" name="email" v-model="email" type="email" :class="{  'invalid' : errors.first('email') != undefined }">
                                  <label for="email" class="active">Correo</label>
                                  <span class="helper-text" :data-error="errors.first('email')"></span>
                               </div>
                            </div>
                            <div class="row">
                               <div class="input-field col s12">
                                  <input v-validate="'required'" placeholder="*********" id="password" name="password" v-model="password" type="password" :class="{  'invalid' : errors.first('password') != undefined }">
                                  <label for="password" class="active">Contraseña</label>
                                  <span class="helper-text" :data-error="errors.first('password')"></span>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                  <button type="submit" :class="{'disabled': loading}" :disabled="loading" class="btn mainColor waves-effect waves-light" id="btn_login">Iniciar sesión</button>
                                </div>
                            </div>
                         </form>
                      </div>
                      <div class="divider"></div>
                      <p class="center-align copyright grey-text">SEGRITH.TECH © 2018</p>
                   </div>
                </div>
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
        email: '',
        password:'',
        loading: false
      }
    },
    methods: {
      login: function(){
        let vm = this
        vm.loading = true
        axios.post(vm.$root.apiMap.login,{
          'grant_type' : 'password',
          'client_id' : vm.$root.client_id,
          'client_secret' : vm.$root.client_secret,
          'username' : vm.email,
          'password' : vm.password,
          'scope' : '*'
        })
        .then(function (response) {
          vm.$root.token = response.data.access_token;
          setTimeout(function () {
            vm.$root.getUser();
            vm.$router.push("/dashboard");
          },10)
        })
        .catch(function(error) {
          M.toastError(error);
        })
        .then(function() {
          vm.loading = false
        })
        return false
      }
    },
    mounted() {
      var loginCard = anime({
        targets: '#login_card',
        duration: 1250,
        easing: 'easeInOutQuart',
        translateY: 0,
        opacity: 1,
        scale: 1,
        delay: 0
      });
      var loginCardBg = anime({
        targets: '#login_card .bg',
        opacity: 1,
        borderRadius: '0%',
        easing: 'easeInSine',
        duration: 500,
        scale: 1,
        delay: 500,
        complete: function(){
          $('input#email').focus();
          $('.copyright').removeClass('grey-text');
          $('.card-title').removeClass('grey-text');
        }
      });
    }
  }
</script>

<style lang="scss" scoped>
.copyright{
  font-size: .8rem;
  position: relative;
  z-index: 1;
  margin: 0px;
  padding: 1.4rem 0px 1.4rem 0px;
}
.card-title{
  font-size: 3rem;
  text-align: center;
}
.btn{
  width: 100%;
}
.divider{
  width: 100%;
}
#login_card{
  background-color: #f5f5f5!important;
}
</style>
