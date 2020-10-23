<template>
  <div class="p-5">
    <div>
      Активность за последний год
      <div>
        <HeatMap />
      </div>
    </div>
  </div>
</template>

<script>
import HeatMap from '~/components/dash/HeatMap/HeatMap'

export default {
  name: 'Profile',
  components: {
    HeatMap
  },
  layout: 'DashProfile'
}
</script>

<style scoped>

</style>
