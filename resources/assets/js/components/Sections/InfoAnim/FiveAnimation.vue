<template lang="html">
  <div class="object">
    <div class="container-img">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
        <path style="fill:#E4F2F6;" d="M501.109,77.834H223.214c-6.015,0-10.893,4.876-10.893,10.892v227.736
          c0,6.015,4.876,10.893,10.893,10.893h277.895c6.015,0,10.893-4.876,10.893-10.893V88.725
          C512.001,82.71,507.124,77.834,501.109,77.834z"/>
        <g class="bars-container">
          <rect class="bars-one" x="256.018" y="241.51" style="fill:#0073AA;" width="36.516" height="46.611"/>
          <rect class="bars-two" x="312.62" y="241.51" style="fill:#0091C8;" width="36.516" height="75.8"/>
          <rect class="bars-three" x="369.223" y="241.51" style="fill:#41B4E6;" width="36.516" height="104.777"/>
          <rect class="bars-four" x="425.816" y="241.51" style="fill:#73C8F0;" width="36.516" height="137.142"/>
        </g>
        <path class="arrow-analytics" style="fill:#FF6196;" d="M417.249,116.238l-21.968-5.729c-4.394-1.144-8.879,1.487-10.024,5.877
          c-1.146,4.39,1.486,8.879,5.876,10.024l2.161,0.564L252.683,189.39c-4.147,1.841-6.017,6.696-4.176,10.844
          c1.842,4.148,6.697,6.016,10.844,4.176l142.963-63.462l-0.818,3.135c-1.146,4.39,1.486,8.879,5.876,10.024
          c4.416,1.151,8.885-1.512,10.024-5.877l5.729-21.968C424.271,121.87,421.639,117.383,417.249,116.238z"/>
        <g class="super-elevate">
          <path style="fill:#78BEFF;" d="M189.346,511.139c-12.688,0-22.975-10.286-22.975-22.975v-183.64
            c0-12.688,10.287-22.975,22.975-22.975c12.688,0,22.975,10.286,22.975,22.975v183.641
            C212.321,500.853,202.036,511.139,189.346,511.139z"/>
          <path style="fill:#93CBFF;" d="M133.885,511.139c-12.688,0-22.975-10.286-22.975-22.975v-183.64
            c0-12.688,10.287-22.975,22.975-22.975s22.975,10.286,22.975,22.975v183.641C156.86,500.853,146.574,511.139,133.885,511.139z"/>
          <path style="fill:#919196;" d="M316.37,5.325c-8.11-6.785-20.184-5.711-26.97,2.399L178.573,140.19h-33.915L33.831,7.724
            C27.046-0.387,14.971-1.46,6.861,5.325s-9.184,18.86-2.399,26.97l106.447,127.231v144.997h101.412V159.525L318.769,32.295
            C325.554,24.185,324.48,12.11,316.37,5.325z"/>
          <path style="fill:#838387;" d="M316.37,5.325c-8.11-6.785-20.184-5.711-26.97,2.399L178.573,140.19h-16.961v164.334h50.709V159.525
            L318.769,32.295C325.554,24.185,324.48,12.11,316.37,5.325z"/>
          <path style="fill:#BA6746;" d="M312.317,40.006l6.451-7.711c6.785-8.11,5.711-20.184-2.399-26.97s-20.184-5.711-26.97,2.399
            l-6.216,7.43L312.317,40.006z"/>
          <polygon style="fill:#FFFFFF;" points="312.317,40.006 318.769,32.295 289.4,7.724 283.184,15.154 "/>
          <path style="fill:#BA6746;" d="M10.913,40.006l29.483-24.435l-6.565-7.847C27.046-0.387,14.971-1.46,6.861,5.325
            s-9.184,18.86-2.399,26.97L10.913,40.006z"/>
          <polygon style="fill:#FFFFFF;" points="10.913,40.006 40.396,15.571 33.831,7.724 4.463,32.295 "/>
          <circle style="fill:#BA6746;" cx="161.62" cy="83.968" r="39.68"/>
          <polygon style="fill:#FFFFFF;" points="138.437,153.95 161.613,214.77 170.868,190.491 184.739,153.95 178.573,140.19
            144.658,140.19 "/>
          <path style="fill:#414B82;" d="M173.973,165.578l-6.313-11.483l5.441-9.896c0.989-1.8-0.314-4.009-2.371-4.009H152.49
            c-2.054,0-3.362,2.207-2.371,4.009l5.459,9.93l-6.296,11.451c-0.872,1.586-1.155,3.428-0.801,5.202l3.883,19.714l9.248,24.274
            l9.256-24.279l3.906-19.708C175.129,169.008,174.845,167.164,173.973,165.578z"/>
          <rect x="176.758" y="193.356" style="fill:#373C41;" width="25.167" height="7.763"/>
        </g>
      </svg>
    </div>
    <span class="title-object">Crear una ventaja competitiva para la organización</span>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
  .arrow-analytics {
    animation: arrowAnalytics 3s linear infinite;
  }
  .bars-one {
    animation: barsFour 3s linear infinite;
  }
  .bars-two {
    animation: barsThree 3s linear infinite;
  }
  .bars-three {
    animation: barsTwo 3s linear infinite;
  }
  .bars-four {
    animation: barsOne 3s linear infinite;
  }
  .bars-container {
    transform: rotate(180deg) translateX(136px) translateY(-231px);
    transform-origin: 425px 150px;
  }
</style>
