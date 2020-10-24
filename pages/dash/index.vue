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
      <nuxt-link v-for="i in 24" :key="i" to="/dash/courseDetails" class="col-3">
        <Card :panel="isAdmin" />
      </nuxt-link>
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
