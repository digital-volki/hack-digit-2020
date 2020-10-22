<template>
  <div class="p-3 pt-5 container-top sticky-top text-primary">
    <Back color="white" />
  </div>
</template>

<style scoped>

.container-top{
  background-color: #84CD8B;
  height: 100vh;
}

</style>
<script>

import Back from '@/components/icons/Back'

export default {
  components: { Back },
  data () {
    return {
      color: 'white'
    }
  }
}
</script>
