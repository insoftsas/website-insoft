<template lang="html">
  <section id="participate">
    <div class="container bg-special-border">
      <h2 class="title-section">¿Quiénes participan?</h2>
      <div class="row">
        <div class="col s12 no-padding">
          <div class="col s12 m6 container-content-info">
            <div class="container-participate enterprise">
              <div class="card-participate">
                <img src="/images/participate/teamwork.svg" class="responsive-img" />
              </div>
              <div class="card-title-participate">
                <span class="title">Empresas</span>
              </div>
              <div class="card-info-participate">Las empresas requieren soluciones tecnológicas para el potenciamiento de su operatividad, ya sea replantear los modelos de negocios u optimizar procesos de la cadena de valor. Las empresas identificarán las necesidades que limitan sus procesos de transformación digital, y serán expuestas ante los makers para el desarrollo de soluciones tecnológicas.
              </div>
            </div>
          </div>
          <div class="col s12 m6 container-content-info">
            <div class="container-participate developer">
              <div class="card-participate">
                <img src="/images/participate/hacker.svg" class="responsive-img" />
              </div>
              <div class="card-title-participate">
                <span class="title">Desarrolladores - Makers</span>
              </div>
              <div class="card-info-participate">Los makers son agentes generadores de ideas y conocimientos para la resolución de problemas. Son los desarrolladores de las soluciones a las dificultades presentadas por los empresarios; estos son profesionales o estudiantes, técnicos o tecnólogos que conforman el capital humano.
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

<style lang="scss" scoped>
.card-participate {
  text-align: center;
  margin: auto;
  background: #f9f9f9;
  border: 1px solid #f2f2f2;
	& img {
  	display: block;
    margin: auto;
    width: 100px;
    padding: 1em;
    box-sizing: content-box;
  }
}

// bg #ffd422
.card-title-participate {
  text-align: center;
  height: 40px;
  line-height: 40px;
  background: #f2f2f2;
  color: #607D8B;
  padding: 0 5px;
  & .title {
    font-size: 1.3rem;
    font-weight: bold;
    text-transform: uppercase;
	}
}

.card-info-participate {
  padding: .5em;
  font-size: 1.2rem;
}
.container-participate {
   position: relative;
   margin-bottom: 20px;
}
</style>
