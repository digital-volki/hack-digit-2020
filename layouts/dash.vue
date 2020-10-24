<template>
  <div class="row">
    <div class="col-auto">
      <LeftSidebar />
    </div>
    <div class="p-5 col">
      <Nuxt />
    </div>
  </div>
</template>

<style scoped>
.row{
  width: 99vw;
}
</style>
<script>

import LeftSidebar from '~/components/dash/LeftSidebar'

export default {
  components: { LeftSidebar }
}
</script>
