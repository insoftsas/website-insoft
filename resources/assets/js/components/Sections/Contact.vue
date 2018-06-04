<template lang="html">
  <footer id="contact">
    <div class="col s12 m10 offset-m1 sponsor">
      <div class="row">
        <div class="col s12 m8">
          <div class="image-sponsor">
            <img src="/images/logo.png" alt="Logo Transformación Digital" class="responsive-img" />
          </div>
          <div class="image-sponsor">
            <img src="/images/logo.png" alt="Logo Transformación Digital" class="responsive-img" />
          </div>
        </div>
        <div class="col s12 m4">
          <p class="title-main-contact">Contactenos</p>
          <ul class="info-contact">
            <li>Comuníquese a la línea: <a href="tel:3006039992">300 603 99992</a></li>
            <li>Correo: <a href="mailto:hackathon@innovemp.co">hackathon@innovemp.co</a></li>
          </ul>
          <p class="title-main-contact">Legal</p>
          <ul class="info-contact">
            <li @click="$root.showTerms" class="show-terms">Terminos y condiciones</li>
          </ul>
        </div>
        <div class="col s12">
          <div class="copy">© 2018 Innovemp</div>
        </div>
        <!--<div class="col s12 container-content-info">
          <div class="col s12">
            <h2 class="title-section">Contacto</h2>
          </div>
          <form class="col s12">
            <div class="row">
              <div class="col s12 m6 inputs-contact">
                <label>Nombres</label>
                <input placeholder="Ingresa tu nombre aquí" type="text" class="browser-default" />
              </div>
              <div class="col s12 m6 inputs-contact">
                <label>Apellidos</label>
                <input placeholder="Ingresa tu apellido aquí" type="text" class="browser-default" />
              </div>
            </div>
            <div class="row">
              <div class="col s12 inputs-contact">
                <label>Mensaje</label>
                <textarea placeholder="Ingresa tu mensaje aquí"></textarea>
              </div>
            </div>
          </form>
        </div>-->
      </div>
    </div>
  </footer>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
  #contact {
    background: #38a2b8;
  }
  .inputs-contact {
    & input, & textarea {
      display: block;
      width: 100%;
      border: none;
      border-radius: 3px;
      background: #fff;
    }
    & input {
      height: 50px;
      padding: 0 20px;
    }
    & textarea {
      height: 150px;
      padding: 20px;
    }
  }
  .title-main-contact {
    text-transform: uppercase;
    font-size: 1rem;
    color: #fff;
  }
  .info-contact {
    font-size: .8rem;
    color: #fff;
    & a {
      color: #fff;
      &:hover {
        text-decoration: underline;
      }
    }
  }
  .show-terms {
    cursor: pointer;
    &:hover {
      text-decoration: underline;
    }
  }
  .image-sponsor {
    width: 200px;
    display: inline-block;
  }
</style>
