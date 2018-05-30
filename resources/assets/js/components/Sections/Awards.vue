<template lang="html">
  <section id="awards">
    <div class="container">
      <div class="row">
        <div class="col s12 no-padding center">
          <div class="award-podium-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 165" style="enable-background:new 0 0 165 512;" xml:space="preserve">
              <g class="award-icon">
                <path style="fill:#2B414D;" class="line-award-2" d="M308.567,161.452l-152.025,68.923l122.88,270.966l66.166-55.926l85.465-12.603  C431.053,432.812,308.567,161.452,308.567,161.452z"/>
                <path style="fill:#475F6C;" class="line-award-1" d="M195.927,164.209l152.025,68.923l-122.88,271.36l-66.166-56.32l-85.858-12.603  C73.047,435.569,195.927,164.209,195.927,164.209z"/>
                <path style="fill:#FFE082;" d="M449.17,197.292c0,14.572-20.874,26.782-24.025,40.566c-3.151,14.178,10.634,34.265,4.726,47.262  c-6.302,12.997-30.326,14.572-38.991,25.6s-4.726,35.446-15.754,44.505s-33.083-0.394-45.686,5.908s-19.298,29.932-33.083,33.083  c-13.391,3.151-29.538-14.966-43.717-14.966c-14.178,0-30.326,18.117-43.717,14.966c-13.785-3.151-20.48-26.782-33.083-33.083  c-12.603-6.302-35.052,3.151-45.686-5.908c-11.028-9.058-7.089-33.477-15.754-44.505s-32.689-12.603-38.991-25.6  c-5.908-12.603,7.877-33.083,4.726-47.262c-3.938-13.785-24.812-25.994-24.812-40.566s20.874-26.782,24.025-40.566  c3.151-14.178-10.634-34.265-4.726-47.262c6.302-12.997,30.326-14.572,38.991-25.6s4.726-35.446,15.754-44.505  s33.083,0.394,45.686-5.908c12.603-6.302,19.298-29.932,33.083-33.083c13.391-3.151,29.538,14.966,43.717,14.966  c14.178,0,30.326-18.117,43.717-14.966c13.785,3.151,20.48,26.782,33.083,33.083c12.603,6.302,35.052-3.151,45.686,5.908  c11.028,9.058,7.089,33.477,15.754,44.505s32.689,12.603,38.991,25.6c5.908,12.603-7.877,33.083-4.726,47.262  C428.296,170.511,449.17,182.72,449.17,197.292z"/>
                <path style="fill:#D7B354;" d="M252.247,118.523c-43.717,0-78.769,35.446-78.769,78.769s35.446,78.769,78.769,78.769  c43.717,0,78.769-35.446,78.769-78.769S295.963,118.523,252.247,118.523z M252.247,232.738c-19.692,0-35.446-15.754-35.446-35.446  s15.754-35.446,35.446-35.446s35.446,15.754,35.446,35.446S271.939,232.738,252.247,232.738z M252.247,55.507  c-78.375,0-141.785,63.409-141.785,141.785s63.409,141.785,141.785,141.785s141.784-63.41,141.784-141.785  S330.622,55.507,252.247,55.507z M252.247,315.446c-65.378,0-118.154-52.775-118.154-118.154S186.868,79.138,252.247,79.138  s118.154,52.775,118.154,118.154S317.625,315.446,252.247,315.446z"/>
              </g>
            </svg>
          </div>
          <h2 class="title-section-award">Premios</h2>
          <div class="container-awards">
            <div class="container-info-award">
              <div class="col s12">
                <div class="award-container">
                  <div class="place-award first"><div>1er puesto</div></div>
                  <div class="price-award first"><div>$ 3.000.000</div></div>
                </div>
              </div>
              <div class="col s12">
                <div class="award-container">
                  <div class="place-award second"><div>2do puesto</div></div>
                  <div class="price-award second"><div>$ 2.000.000</div></div>
                </div>
              </div>
              <div class="col s12">
                <div class="award-container">
                  <div class="place-award third"><div>3er puesto</div></div>
                  <div class="price-award third"><div>$ 1.000.000</div></div>
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

<style lang="scss" scoped>

.award-podium-icon {
  width: 200px;
  margin: auto;
}

.award-icon {
  transform: scale(.3) translateX(600px);
}

.place-award {
  text-align: center;
  font-size: 2rem;
  text-transform: uppercase;
  font-weight: bold;
  &.first {
    color: #2b3b4f;
    border: 5px solid #2b3b4f;
  }
  &.second {
    color: #2961a0;
    border: 5px solid #2961a0;
  }
  &.third {
    color: #29b4c5;
    border: 5px solid #29b4c5;
  }
}

.title-section-award {
  font-size: 2rem;
  color: #ffffff;
  padding: 15px;
  font-weight: bold;
  text-transform: uppercase;
  margin: 0;
}

#awards {
  margin: 1em 0;
  background-image: linear-gradient(135deg, #0c488f, #019994);
}

.price-award {
  text-align: center;
  font-size: 3rem;
  color: #fff;
  font-weight: bold;
  margin-bottom: 20px;
  &.first {
    background: #2b3b4f;
  }
  &.second {
    background: #2961a0;
  }
  &.third {
    background: #29b4c5;
  }
}

.line-award-1 {
  animation: moveLineOne 2.5s ease-out infinite alternate;
}

.line-award-2 {
  animation: moveLineTwo 2s ease-out infinite alternate;
}
</style>
