<template>
  <div class="d-flex">
    <LeftSidebar />
    <div class="p-5">
      <Nuxt />
    </div>
  </div>
</template>

<style>

</style>
<script>
import LeftSidebar from '@/components/dash/LeftSidebar'

export default {
  components: { LeftSidebar }
}
</script>
