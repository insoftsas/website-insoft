<template lang="html">
  <div class="event">
    <div class="content-events">
      <div class="subevent">{{ numberItem }} {{ titleEvent }}</div>
    </div>
    <div class="col s12">
      <div class="title">Califique teniendo en cuenta que 1 es bajo y 5 es alto:</div>
    </div>
    <div class="roles-container">
      <div class="col s12 m12 l2 offset-l1">
        <div class="select-rol evaluate" @click="setEvaluation(numberItem, 1)">1</div>
      </div>
      <div class="col s12 m12 l2">
        <div class="select-rol evaluate" @click="setEvaluation(numberItem, 2)">2</div>
      </div>
      <div class="col s12 m12 l2">
        <div class="select-rol evaluate" @click="setEvaluation(numberItem, 3)">3</div>
      </div>
      <div class="col s12 m12 l2">
        <div class="select-rol evaluate" @click="setEvaluation(numberItem, 4)">4</div>
      </div>
      <div class="col s12 m12 l2">
        <div class="select-rol evaluate" @click="setEvaluation(numberItem, 5)">5</div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      numberItem: String,
      titleEvent: String
    },
    methods: {
      setEvaluation: function (i, c) {
        let vm = this
        let s = vm.$parent.step_evaluate
        if (s >= 1 && s <= 3) {
          switch (i) {
            case '1.1':
              vm.$parent.evaluate_data.event_1 = c
              vm.$parent.step_evaluate++
              break
            case '1.2':
              vm.$parent.evaluate_data.event_2 = c
              vm.$parent.step_evaluate++
              break
            case '1.3':
              vm.$parent.evaluate_data.event_3 = c
              vm.$parent.step_evaluate++
              break
            default:
              break
          }

        } else if (s >= 4 && s <= 6) {
          switch (i) {
            case '2.1':
              vm.$parent.evaluate_data.speaker_1 = c
              vm.$parent.step_evaluate++
              break
            case '2.2':
              vm.$parent.evaluate_data.speaker_2 = c
              vm.$parent.step_evaluate++
              break
            case '2.3':
              vm.$parent.evaluate_data.speaker_3 = c
              vm.$parent.step_evaluate++
              break
            default:
              break
          }
        } else if (s >= 7 && s <= 8) {
          switch (i) {
            case '3.1':
              vm.$parent.evaluate_data.guides_1 = c
              vm.$parent.step_evaluate++
              break
            case '3.2':
              vm.$parent.evaluate_data.guides_2 = c
              vm.$parent.step_evaluate++
              break
            default:
              break
          }
        } else {
          switch (i) {
            case '4.1':
              vm.$parent.evaluate_data.logistics_1 = c
              vm.$parent.step_evaluate++
              break
            case '4.2':
              vm.$parent.evaluate_data.logistics_2 = c
              vm.$parent.step_evaluate++
              break
            case '4.3':
              vm.$parent.evaluate_data.logistics_3 = c
              vm.$parent.sendEvaluate()
              break
            default:
              break
          }
        }
      }
    },
    data() {
      return {

      }
    }
  }
</script>

<style lang="scss" scoped>
  .select-rol {
    &.evaluate {
      width: 50px;
      height: 50px;
      line-height: 50px;
    }
  }

  .content-events {
    font-size: 1.5rem;
    font-weight: bold;
    color: #fff;
    text-align: center;
  }
  .title {
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    margin: 10px 0 40px 0;
    text-align: center;
  }
  @media only screen and (max-width: 993px) {
    .select-rol {
      width: 100% !important;
      line-height: 68px !important;
      height: 68px !important;
      border-radius: 3px !important;
      margin: auto 0 20px auto !important;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
    }
  }
</style>
