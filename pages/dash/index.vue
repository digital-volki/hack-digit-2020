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
    <div class="row container-xl">
      <nuxt-link v-for="i in 24" :key="i" to="/courPage/courPage" class="col-3">
        <Card :panel="isAdmin" />
      </nuxt-link>
    </div>
    <MainSlideBar />
  </div>
</template>

<script>
import Card from '~/components/dash/Card'
import MainSlideBar from '~/components/dash/MainSlideBar'

export default {
  name: 'Dash',
  components: {
    Card,
    MainSlideBar
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
a{
  text-decoration: none !important;
}
div {
  font-size: 35px;
}
</style>
