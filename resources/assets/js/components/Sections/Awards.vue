<template lang="html">
  <section id="awards">
    <div class="col s12 m10 offset-m1 card-special">
      <div class="row">
        <div class="col s12 margin-special">
          <div class="col s12 award-fade">
            <h2 class="title-section">Premiación del evento</h2>
          </div>
          <div class="col s12 container-content-info award-fade">
            <div class="content-info margin-default-bottom">
              <span>Los jurados evaluarán y calificarán a los participantes para entregar los premios a los 3 participantes o grupos ganadores.</span>
            </div>
          </div>
          <div class="col s12 hide-on-small-and-down move-awards">
            <div class="col s12 m4">
              <div class="award-podium-icon" :class="{ 'hide-award' : !show_award.medium }">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 165" style="enable-background:new 0 0 165 512;" xml:space="preserve">
                  <g class="award-icon">
                    <path style="fill:#293575;" class="line-award-2" d="M308.567,161.452l-152.025,68.923l122.88,270.966l66.166-55.926l85.465-12.603  C431.053,432.812,308.567,161.452,308.567,161.452z"/>
                    <path style="fill:#293575;" class="line-award-1" d="M195.927,164.209l152.025,68.923l-122.88,271.36l-66.166-56.32l-85.858-12.603  C73.047,435.569,195.927,164.209,195.927,164.209z"/>
                    <path style="fill:#dbdeee;" d="M449.17,197.292c0,14.572-20.874,26.782-24.025,40.566c-3.151,14.178,10.634,34.265,4.726,47.262  c-6.302,12.997-30.326,14.572-38.991,25.6s-4.726,35.446-15.754,44.505s-33.083-0.394-45.686,5.908s-19.298,29.932-33.083,33.083  c-13.391,3.151-29.538-14.966-43.717-14.966c-14.178,0-30.326,18.117-43.717,14.966c-13.785-3.151-20.48-26.782-33.083-33.083  c-12.603-6.302-35.052,3.151-45.686-5.908c-11.028-9.058-7.089-33.477-15.754-44.505s-32.689-12.603-38.991-25.6  c-5.908-12.603,7.877-33.083,4.726-47.262c-3.938-13.785-24.812-25.994-24.812-40.566s20.874-26.782,24.025-40.566  c3.151-14.178-10.634-34.265-4.726-47.262c6.302-12.997,30.326-14.572,38.991-25.6s4.726-35.446,15.754-44.505  s33.083,0.394,45.686-5.908c12.603-6.302,19.298-29.932,33.083-33.083c13.391-3.151,29.538,14.966,43.717,14.966  c14.178,0,30.326-18.117,43.717-14.966c13.785,3.151,20.48,26.782,33.083,33.083c12.603,6.302,35.052-3.151,45.686,5.908  c11.028,9.058,7.089,33.477,15.754,44.505s32.689,12.603,38.991,25.6c5.908,12.603-7.877,33.083-4.726,47.262  C428.296,170.511,449.17,182.72,449.17,197.292z"/>
                    <path style="fill:#6774b8;" d="M252.247,118.523c-43.717,0-78.769,35.446-78.769,78.769s35.446,78.769,78.769,78.769  c43.717,0,78.769-35.446,78.769-78.769S295.963,118.523,252.247,118.523z M252.247,232.738c-19.692,0-35.446-15.754-35.446-35.446  s15.754-35.446,35.446-35.446s35.446,15.754,35.446,35.446S271.939,232.738,252.247,232.738z M252.247,55.507  c-78.375,0-141.785,63.409-141.785,141.785s63.409,141.785,141.785,141.785s141.784-63.41,141.784-141.785  S330.622,55.507,252.247,55.507z M252.247,315.446c-65.378,0-118.154-52.775-118.154-118.154S186.868,79.138,252.247,79.138  s118.154,52.775,118.154,118.154S317.625,315.446,252.247,315.446z"/>
                  </g>
                </svg>
              </div>
              <div class="container-awards" @mouseover="handleIconAward(1)" @mouseout="handleIconAward(1)">
                <div class="box show-front l first">
                  <figure class="front">
                    <span class="number thi">1</span>
                    <span class="post">Lugar</span>
                  </figure>
                  <figure class="left">
                    <span class="money-win">$ 3.000.000</span>
                  </figure>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="award-podium-icon" :class="{ 'hide-award' : !show_award.left }">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 165" style="enable-background:new 0 0 165 512;" xml:space="preserve">
                  <g class="award-icon">
                    <path style="fill:#1e527a;" class="line-award-2" d="M308.567,161.452l-152.025,68.923l122.88,270.966l66.166-55.926l85.465-12.603  C431.053,432.812,308.567,161.452,308.567,161.452z"/>
                    <path style="fill:#1e527a;" class="line-award-1" d="M195.927,164.209l152.025,68.923l-122.88,271.36l-66.166-56.32l-85.858-12.603  C73.047,435.569,195.927,164.209,195.927,164.209z"/>
                    <path style="fill:#dbdeee;" d="M449.17,197.292c0,14.572-20.874,26.782-24.025,40.566c-3.151,14.178,10.634,34.265,4.726,47.262  c-6.302,12.997-30.326,14.572-38.991,25.6s-4.726,35.446-15.754,44.505s-33.083-0.394-45.686,5.908s-19.298,29.932-33.083,33.083  c-13.391,3.151-29.538-14.966-43.717-14.966c-14.178,0-30.326,18.117-43.717,14.966c-13.785-3.151-20.48-26.782-33.083-33.083  c-12.603-6.302-35.052,3.151-45.686-5.908c-11.028-9.058-7.089-33.477-15.754-44.505s-32.689-12.603-38.991-25.6  c-5.908-12.603,7.877-33.083,4.726-47.262c-3.938-13.785-24.812-25.994-24.812-40.566s20.874-26.782,24.025-40.566  c3.151-14.178-10.634-34.265-4.726-47.262c6.302-12.997,30.326-14.572,38.991-25.6s4.726-35.446,15.754-44.505  s33.083,0.394,45.686-5.908c12.603-6.302,19.298-29.932,33.083-33.083c13.391-3.151,29.538,14.966,43.717,14.966  c14.178,0,30.326-18.117,43.717-14.966c13.785,3.151,20.48,26.782,33.083,33.083c12.603,6.302,35.052-3.151,45.686,5.908  c11.028,9.058,7.089,33.477,15.754,44.505s32.689,12.603,38.991,25.6c5.908,12.603-7.877,33.083-4.726,47.262  C428.296,170.511,449.17,182.72,449.17,197.292z"/>
                    <path style="fill:#769ebc;" d="M252.247,118.523c-43.717,0-78.769,35.446-78.769,78.769s35.446,78.769,78.769,78.769  c43.717,0,78.769-35.446,78.769-78.769S295.963,118.523,252.247,118.523z M252.247,232.738c-19.692,0-35.446-15.754-35.446-35.446  s15.754-35.446,35.446-35.446s35.446,15.754,35.446,35.446S271.939,232.738,252.247,232.738z M252.247,55.507  c-78.375,0-141.785,63.409-141.785,141.785s63.409,141.785,141.785,141.785s141.784-63.41,141.784-141.785  S330.622,55.507,252.247,55.507z M252.247,315.446c-65.378,0-118.154-52.775-118.154-118.154S186.868,79.138,252.247,79.138  s118.154,52.775,118.154,118.154S317.625,315.446,252.247,315.446z"/>
                  </g>
                </svg>
              </div>
              <div class="container-awards" @mouseover="handleIconAward(2)" @mouseout="handleIconAward(2)">
                <div class="box show-front r second">
                  <figure class="front">
                    <span class="number fir">2</span>
                    <span class="post">Lugar</span>
                  </figure>
                  <figure class="right">
                    <span class="money-win">$ 2.000.000</span>
                  </figure>
                </div>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="award-podium-icon" :class="{ 'hide-award' : !show_award.right }">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 165" style="enable-background:new 0 0 165 512;" xml:space="preserve">
                  <g class="award-icon">
                    <path style="fill:#138695;" class="line-award-2" d="M308.567,161.452l-152.025,68.923l122.88,270.966l66.166-55.926l85.465-12.603  C431.053,432.812,308.567,161.452,308.567,161.452z"/>
                    <path style="fill:#138695;" class="line-award-1" d="M195.927,164.209l152.025,68.923l-122.88,271.36l-66.166-56.32l-85.858-12.603  C73.047,435.569,195.927,164.209,195.927,164.209z"/>
                    <path style="fill:#dbdeee;" d="M449.17,197.292c0,14.572-20.874,26.782-24.025,40.566c-3.151,14.178,10.634,34.265,4.726,47.262  c-6.302,12.997-30.326,14.572-38.991,25.6s-4.726,35.446-15.754,44.505s-33.083-0.394-45.686,5.908s-19.298,29.932-33.083,33.083  c-13.391,3.151-29.538-14.966-43.717-14.966c-14.178,0-30.326,18.117-43.717,14.966c-13.785-3.151-20.48-26.782-33.083-33.083  c-12.603-6.302-35.052,3.151-45.686-5.908c-11.028-9.058-7.089-33.477-15.754-44.505s-32.689-12.603-38.991-25.6  c-5.908-12.603,7.877-33.083,4.726-47.262c-3.938-13.785-24.812-25.994-24.812-40.566s20.874-26.782,24.025-40.566  c3.151-14.178-10.634-34.265-4.726-47.262c6.302-12.997,30.326-14.572,38.991-25.6s4.726-35.446,15.754-44.505  s33.083,0.394,45.686-5.908c12.603-6.302,19.298-29.932,33.083-33.083c13.391-3.151,29.538,14.966,43.717,14.966  c14.178,0,30.326-18.117,43.717-14.966c13.785,3.151,20.48,26.782,33.083,33.083c12.603,6.302,35.052-3.151,45.686,5.908  c11.028,9.058,7.089,33.477,15.754,44.505s32.689,12.603,38.991,25.6c5.908,12.603-7.877,33.083-4.726,47.262  C428.296,170.511,449.17,182.72,449.17,197.292z"/>
                    <path style="fill:#63bdc9;" d="M252.247,118.523c-43.717,0-78.769,35.446-78.769,78.769s35.446,78.769,78.769,78.769  c43.717,0,78.769-35.446,78.769-78.769S295.963,118.523,252.247,118.523z M252.247,232.738c-19.692,0-35.446-15.754-35.446-35.446  s15.754-35.446,35.446-35.446s35.446,15.754,35.446,35.446S271.939,232.738,252.247,232.738z M252.247,55.507  c-78.375,0-141.785,63.409-141.785,141.785s63.409,141.785,141.785,141.785s141.784-63.41,141.784-141.785  S330.622,55.507,252.247,55.507z M252.247,315.446c-65.378,0-118.154-52.775-118.154-118.154S186.868,79.138,252.247,79.138  s118.154,52.775,118.154,118.154S317.625,315.446,252.247,315.446z"/>
                  </g>
                </svg>
              </div>
              <div class="container-awards" @mouseover="handleIconAward(3)" @mouseout="handleIconAward(3)">
                <div class="box show-front r third">
                  <figure class="front">
                    <span class="number thi">3</span>
                    <span class="post">Lugar</span>
                  </figure>
                  <figure class="right">
                    <span class="money-win trigger-for-contact">$ 1.000.000</span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="show-on-small hide-on-med-and-up">
            <div class="col s12">
              <div class="container-award-mobile first">
                <span class="post-award">1er puesto</span>
                <span class="price-award-mobile">$ 3.000.000</span>
              </div>
              <div class="container-award-mobile second">
                <span class="post-award">2do puesto</span>
                <span class="price-award-mobile">$ 2.000.000</span>
              </div>
              <div class="container-award-mobile third">
                <span class="post-award">3er puesto</span>
                <span class="price-award-mobile trigger-for-contact">$ 1.000.000</span>
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
  data() {
    return {
      show_award: {
        left: false,
        medium: false,
        right: false
      }
    }
  },
  methods: {
    handleIconAward: function (t) {
      switch (t) {
        case 1:
          this.show_award.medium = !this.show_award.medium
          break
        case 2:
          this.show_award.left = !this.show_award.left
          break
        case 3:
          this.show_award.right = !this.show_award.right
          break
        default:
      }
    }
  }
}
</script>

<style lang="scss" scoped>

  $box-width: 150px;
  $box-height: $box-width * 2;

  $first-color-one: #0a1557;
  $first-color-two: #303c7c;

  $second-color-one: #0469b9;
  $second-color-two: #205076;

  $third-color-one: #00BCD4;
  $third-color-two: #197682;

  .move-awards {
    position: relative;
  }
  .award-podium-icon {
    width: 200px;
    margin: auto;
    transition: all .5s ease;
    &.hide-award {
      transform: translateY(110px);
    }
  }

  .number, .post {
    position: absolute;
    top: 50%;
    left: 50%;
    font-weight: bold;
    text-transform: uppercase;
    transform: translate(-50%, -50%);
  }

  .number {
    font-size: 5rem;
    top: 30%;
    &.fir {
      &:after {
        content: 'do';
        font-size: 1rem;
      }
    }
    &.thi {
      &:after {
        content: 'er';
        font-size: 1rem;
      }
    }
  }

  .money-win {
    position: absolute;
    top: 114px;
    left: -85px;
    font-weight: bold;
    text-transform: uppercase;
    transform: rotate(90deg);
    font-size: 3.2rem;
    width: 320px;
  }

  .post {
    font-size: 2rem;
  }

  .award-icon {
    transform: scale(.3) translateX(600px);
  }

  .container-awards {
    width: $box-width;
    height: $box-height;
    position: relative;
    margin: auto;
    perspective: 1200px;
    animation: moveJiji 2s ease infinite alternate;
  }

  .container-award-mobile {
    padding: 10px 20px;
    color: #fff;
    font-size: 1.3rem;
    font-weight: bold;
    margin-bottom: 20px;
    &.first {
      background: linear-gradient(135deg, $first-color-one, $first-color-two);
    }
    &.second {
      background: linear-gradient(135deg, $second-color-one, $second-color-two);
    }
    &.third {
      background: linear-gradient(135deg, $third-color-one, $third-color-two);
    }
    & .price-award-mobile {
      float: right;
    }
  }

  .box {
    width: 100%;
    height: 100%;
    position: absolute;;
    transform-style: preserve-3d;
    transition: transform .2s;
    & figure {
      display: table;
      position: absolute;
      text-align: center;
      color: white;
      margin: 0;
    }
    // colors
    &.first {
      & .front {
        background: linear-gradient(135deg, $first-color-one, $first-color-two);
      }
      & .right, & .left {
        background: linear-gradient(135deg, $first-color-one, $first-color-two);
      }
    }

    &.second {
      & .front {
        background: linear-gradient(135deg, $second-color-one, $second-color-two);
      }
      & .right, & .left {
        background: linear-gradient(135deg, $second-color-one, $second-color-two);
      }
    }

    &.third {
      & .front {
        background: linear-gradient(135deg, $third-color-one, $third-color-two);
      }
      & .right, & .left {
        background: linear-gradient(135deg, $third-color-one, $third-color-two);
      }
    }

    // dimensions
    & .front {
      width: $box-width;
      height: $box-height;
    }
    & .right, & .left {
      width: $box-width;
      height: $box-height;
    }

    // positions
    & .right, & .left {
      left: $box-width;
    }

    // transforms
    & .front {
      transform: translateZ(74px);
    }

    & .right {
      transform: rotateY(90deg) translateZ(-74px);
    }

    & .left {
      transform: rotateY(-90deg) translateZ(225px);
    }

    // show specific face
    &.show-front {
      transform: translateZ(0px);
    }
    &.r:hover {
      transform: translateZ(0px) rotateY(-90deg);
      & .right, & .left {
        left: $box-width - 1;
      }
    }
    &.l:hover {
      transform: translateZ(0px) rotateY(90deg);
      & .front {
        left: 1px;
      }
    }
  }

  /*
  .place-award {
    &.first {
      background-color: #2b3b4f;
    }
    &.second {
      background-color: #2961a0;
    }
    &.third {
      background-color: #29b4c5;
    }
  }*/

  #awards {
    background-color: #38a2b8;
  }

  .line-award-1 {
    animation: moveLineOne 2.5s ease-out infinite alternate;
  }

  .line-award-2 {
    animation: moveLineTwo 2s ease-out infinite alternate;
  }
</style>
