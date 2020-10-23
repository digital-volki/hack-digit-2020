<template>
  <div>
    <div>
      Мероприятия (47)
    </div>
    <div class="row">
      <Card v-for="i in 24" :key="i" />
    </div>
    <Comments />
  </div>
</template>

<script>
import Comments from '../../components/dash/Comments'
import Card from '~/components/dash/Card'

export default {
  name: 'Dash',
  components: {
    Comments,
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
