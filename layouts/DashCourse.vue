<template>
  <div class="row">
    <div class="col-auto">
      <LeftSidebar />
    </div>
    <div class="p-5 pr-0 col-auto">
      <Nuxt />
    </div>
    <div class="col m-0 p-0">
      <RightSideBar />
    </div>
  </div>
</template>

<style scoped>
  .row{
    width: 100.8vw;
  }
</style>
<script>
import RightSideBar from '../components/dash/RightSideBar'
import LeftSidebar from '~/components/dash/LeftSidebar'

export default {
  components: { LeftSidebar, RightSideBar }
}
</script>
