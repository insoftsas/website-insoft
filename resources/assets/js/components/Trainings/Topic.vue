<template lang="html">
  <div>
    <div class="thematic">
      <div class="number-thematic">{{ $parent.step_topic }}.</div>
      <div class="content-thematic" v-html="$parent.contentTopic"></div>
    </div>
    <div class="roles-container">
      <div class="col s12 m6 l4 offset-l2">
        <div class="select-rol" @click="setTopic($parent.step_topic, true)">Si se abordo</div>
      </div>
      <div class="col s12 m6 l4">
        <div class="select-rol" @click="setTopic($parent.step_topic, false)">No se abordo</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    setTopic: function (t, v) {
      let vm = this
      switch (t) {
        case 1:
          if (v)
            vm.$parent.evaluate_data.topic_1 = v
          vm.$parent.step_topic++
          break
        case 2:
          if (v)
            vm.$parent.evaluate_data.topic_2 = v
          vm.$parent.step_topic++
          break
        case 3:
          if (v)
            vm.$parent.evaluate_data.topic_3 = v
          vm.$parent.step_topic++
          break
        case 4:
          if (v)
            vm.$parent.evaluate_data.topic_4 = v
          vm.$parent.evaluate_status = true
          break
        default:
          break
      }
    }
  }
}
</script>

<style lang="scss">
  .thematic {
    display: inline-block;
    & .number-thematic {
      display: inline-block;
      width: 40px;
      text-align: center;
      font-weight: bold;
      color: #fff;
      font-size: 3rem;
      vertical-align: middle;
    }
    & .content-thematic {
      display: inline-block;
      text-align: left;
      padding: 10px 18px;
      font-weight: bold;
      color: #fbfcfd;
      vertical-align: middle;
    }
  }
  .roles-container {
    margin-top: 40px;
  }
  .title-description-inscription {
    margin: 3em 0;
  }
</style>
