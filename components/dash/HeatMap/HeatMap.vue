<template>
  <div>
    <VuejsHeatmap :entries="entries" />
  </div>
</template>

<script>
import VuejsHeatmap from 'vuejs-heatmap'
export default {
  name: 'HeatMap',
  components: {
    VuejsHeatmap
  },
  data () {
    return {
      entries: [
        {
          counting: 2070,
          created_at: '2020-09-24'
        },
        {
          counting: 1070,
          created_at: '2020-09-25'
        },
        {
          counting: 3493,
          created_at: '2020-06-22'
        },
        {
          counting: 393,
          created_at: '2020-06-27'
        },
        {
          counting: 3972,
          created_at: '2020-06-28'
        }
      ]
    }
  }
}

</script>
