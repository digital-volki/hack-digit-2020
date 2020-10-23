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
          created_at: '2020-06-24'
        },
        {
          counting: 3493,
          created_at: '2018-06-22'
        }
      ]
    }
  }
}

</script>
