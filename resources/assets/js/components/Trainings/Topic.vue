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
  props: ['isMaker'],
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
          if (this.isMaker)
            vm.$parent.evaluate_status = true
          else
            vm.$parent.step_topic++
          break
        case 5:
          if (v)
            vm.$parent.evaluate_data.topic_5 = v
            vm.$parent.step_topic++
          break
        case 6:
          if (v)
            vm.$parent.evaluate_data.topic_6 = v
          vm.$parent.step_topic++
          break
        case 7:
          if (v)
            vm.$parent.evaluate_data.topic_7 = v
          vm.$parent.evaluate_status = true
          break
        default:
          break
      }
    }
  }
}
</script>
