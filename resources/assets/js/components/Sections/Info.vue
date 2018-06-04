<template lang="html">
  <section id="info">
    <div class="col s12 m10 offset-m1 card-special">
      <div class="row">
        <div class="col s12 margin-special">
          <div class="col s12 container-content-info">
            <div class="col s12 fade-info">
              <h2 class="title-section info_title">¿Qúe es la transformación digital?</h2>
            </div>
            <div class="col s12 m6 fade-info">
              <div class="content-info">
                <span id="trigger-bg-last">La transformación digital es el proceso por el cual las empresas reorganizan sus métodos de trabajo y estrategias, para obtener más beneficios gracias a la implementación de las nuevas tecnologías, reconstruye las dinámicas de las organizaciones para adaptarlas a las necesidades del presente y del futuro.</span>
              </div>
            </div>
            <div class="col s12 m6 fade-info">
              <trans-animation></trans-animation>
            </div>
            <div class="col s12">
              <h2 class="subtitle-section fade-info">¿Qué ventajas aporta la Transformación Digital?</h2>
              <span class="text-justify fade-info">La clave para la organización es ver la transformación digital como una oportunidad que permite combinar prácticas y formas de hacer que dan como resultado nuevas técnicas y habilidades como las siguientes:</span>
              <div class="container-objects">
                <div class="col s12 m6 l4">
                  <one-animation></one-animation>
                </div>
                <div class="col s12 m6 l4">
                  <two-animation></two-animation>
                </div>
                <div class="col s12 m6 l4">
                  <three-animation></three-animation>
                </div>
                <div class="col s12 m6 l4">
                  <four-animation></four-animation>
                </div>
                <div class="col s12 m6 l4">
                  <five-animation></five-animation>
                </div>
                <div class="col s12 m6 l4 trigger-for-participate">
                  <six-animation></six-animation>
                </div>
              </div>
            </div>
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

<style lang="scss">
  .super-elevate {
    animation: superElevate 1s ease-in-out infinite alternate;
  }
  .hand-second {
    transform-origin: 364px 248px;
    animation: moveHandSecond .5s linear infinite alternate;
  }
  .hand-first {
    transform-origin: 40px 40px;
    animation: moveHandFirst .5s linear infinite alternate;
  }
  .fast-answer {
    animation: turnOnOff 1s linear infinite;
  }
  .money-fade-one {
    animation: moneyFadeOne 1s ease infinite;
  }
  .money-fade-two {
    animation: moneyFadeTwo 1s ease infinite;
  }
  .money-fade-three {
    animation: moneyFadeThree 1s ease infinite;
  }
  .move-hand-pc {
    transform-origin: 236px 52px;
    animation: moveHandPc 1s ease infinite alternate;
  }
  .move-paper {
    transform-origin: 265px 294px;
    animation: movePaper 1s linear infinite alternate;
  }
</style>
