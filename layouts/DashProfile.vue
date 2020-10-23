<template>
  <div class="d-flex">
    <div class="">
      <LeftSidebar />
    </div>
    <div class="flex-fill">
      <div class="nav-head pl-4 d-flex w-100 shadow-lg pt-2">
        <nuxt-link class="pb-1 d-flex align-items-center align-content-center" active-class="border-3" to="/dash/profile">
          <div>
            <Person />
          </div>
          <div class="m-2 head-title">
            Аккаунт
          </div>
        </nuxt-link>
        <nuxt-link active-class="border-3" class="ml-3 pb-1 d-flex align-items-center align-content-center" to="/dash/editProfile">
          <div>
            <NewsPaper />
          </div>
          <div class="m-2 head-title">
            Личная информация
          </div>
        </nuxt-link>
      </div>
      <Nuxt />
    </div>
  </div>
</template>

<style scoped>
.nav-head>*:hover{
  text-decoration: none !important;
}
.head-title{
  font-style: normal;
  font-weight: bold;
  font-size: 20px;
  line-height: 24px;
  color: #84CD8B !important;
}
.border-3{
  border-bottom: #84CD8B solid 4px !important;
}
</style>
<script>

import Person from '../components/icons/Person'
import NewsPaper from '../components/icons/NewsPaper'
import LeftSidebar from '~/components/dash/LeftSidebar'

export default {
  components: { NewsPaper, Person, LeftSidebar }
}
</script>
