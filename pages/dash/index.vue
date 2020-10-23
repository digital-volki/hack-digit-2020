<template>
  <div>
    <div>
      Мероприятия (47)
    </div>
    <div class="row">
      <Card v-for="i in 24" :key="i" />
    </div>
  </div>
</template>

<script>
import Card from '~/components/dash/Card'

export default {
  name: 'Dash',
  components: {
    Card
  },
  layout: 'dash'
}
</script>

<style scoped>
div {
  font-size: 35px;
}
</style>
