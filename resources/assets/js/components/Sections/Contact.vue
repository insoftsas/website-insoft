<template lang="html">
  <section id="conctact">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="info-contact">
            <span class="title-main-contact">Contactanos:</span>
            <span>Comuníquese a la linea <a href="tel:3006039992">3006039992</a></span>
            <span>Correo: hackhaton@innovemp.co</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
  #conctact {
    background-repeat: no-repeat;
    background-image: url(../../../images/bg.png);
    background-size: cover;
    background-position: center;
    background-position-y: -367px;
    position: relative;
    margin-top: 20px;
  }
  .title-main-contact {
    text-transform: uppercase;
  }
  .info-contact {
    & span {
      color: #fff;
      font-size: 1.5rem;
      display: block;
      font-weight: bold;
      & a {
        color: #fff;
      }
    }
  }
</style>
