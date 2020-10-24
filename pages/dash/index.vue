<template>
  <div>
    <div class="d-flex justify-content-between mb-2">
      <div>
        Мероприятия (47)
      </div>
      <div>
        <button :hidden="!isAdmin" class="btn btn-success">
          Добавить +
        </button>
      </div>
    </div>
    <div class="row">
      <Card v-for="i in 24" :key="i" :panel="isAdmin" />
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
  data () {
    return {
      isAdmin: this.$route.query.admin
    }
  },
  layout: 'dash'
}
</script>

<style scoped>
div {
  font-size: 35px;
}
</style>
