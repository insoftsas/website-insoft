<template lang="html">
  <section id="phase">
    <div class="col s12 m10 offset-m1 card-special">
      <div class="row">
        <div class="col s12 margin-special">
          <div class="col s12">
            <h2 class="title-section phase-fade title-fade">Fases</h2>
          </div>
          <div class="col s12 container-content-info phase-fade">
            <div class="content-info margin-default-bottom">
              <span>Proponemos los siguientes fases a cumplir para que el evento sea todo un exito.</span>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="container-challenge first">
              <div class="title-number-challenge">
                <div class="bg-number">
                  <span class="number-challenge">1</span>
                </div>
              </div>
              <div class="challenge-icon">
                <div>
                  <img src="/images/challenges/car-repair.svg" class="responsive-img" />
                </div>
              </div>
              <div class="title-challenge">Diagnóstico</div>
              <div class="info-challenge">Socialización del proyecto al sector productivo y capacitación en Transformación Productiva y Digital</div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="container-challenge second">
              <div class="title-number-challenge">
                <div class="bg-number">
                  <span class="number-challenge">2</span>
                </div>
              </div>
              <div class="challenge-icon">
                <div>
                  <img src="/images/challenges/user.svg" class="responsive-img" />
                </div>
              </div>
              <div class="title-challenge">Selección</div>
              <div class="info-challenge">Reclutamiento y selección de los Makers, socialización del proyecto y capacitación en prototipado.</div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="container-challenge third">
              <div class="title-number-challenge">
                <div class="bg-number">
                  <span class="number-challenge">3</span>
                </div>
              </div>
              <div class="challenge-icon">
                <div>
                  <img src="/images/challenges/problem.svg" class="responsive-img" />
                </div>
              </div>
              <div class="title-challenge">Necesidades</div>
              <div class="info-challenge">Categorización de necesidades y conformación de Makers Team.</div>
            </div>
          </div>
          <div class="col s12 m6 l3">
            <div class="container-challenge four trigger-for-award">
              <div class="title-number-challenge">
                <div class="bg-number">
                  <span class="number-challenge">4</span>
                </div>
              </div>
              <div class="challenge-icon">
                <div>
                  <img src="/images/challenges/employee_female.svg" class="responsive-img mini" />
                  <img src="/images/challenges/employee_male.svg" class="responsive-img mini" />
                </div>
              </div>
              <div class="title-challenge">Desarrollo</div>
              <div class="info-challenge">Desarrollo tecnológico para solucionar la necesidad planteada por el sector empresarial.</div>
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

<style lang="scss" scoped>
.special-margin {
  margin-bottom: 105px;
}
.container-challenge {
  &.active {
    &.first {
      animation: showFlashPhaseFirst 2s ease;
    }
    &.second {
      animation: showFlashPhaseSecond 2s ease;
    }
    &.third {
      animation: showFlashPhaseThird 2s ease;
    }
    &.four {
      animation: showFlashPhaseFour 2s ease;
    }
  }
}
</style>
