<template>
  <div class="pt-5 pl-5 container-top sticky-top text-white pr-5">
    <nuxt-link class="text-white d-flex align-items-center" to="/dash/alerts">
      <Bell />
      <div class="ml-2">
        Оповещения
      </div>
      <b-badge pill class="bg-white green-link mt-1 ml-auto">
        3
      </b-badge>
    </nuxt-link>
    <nuxt-link to="/dash/profile" class="text-white d-flex mt-3 justify-content-between align-items-center">
      <img src="/ex/avatar.png" class="" alt="avatar">
      <div class="flex-column flex-fill">
        <div class="ml-2">
          {{ `${user.lastname} ${user.firstname}` }}
        </div>
        <div class="ml-2 link">
          Перейти в профиль
        </div>
      </div>
    </nuxt-link>
    <div class="mt-5">
      <b-list-group flush>
        <b-list-group-item class="bg-inv m-0 p-0 ">
          <nuxt-link v-for="(item, index) in links" :key="index" :to="item.to" :class="[item.isAdmin ? 'd-lg-none' : '']" class="mt-3 text-white d-flex justify-content-around align-items-center">
            <component :is="item.icon" />
            <div class="ml-1">
              {{ item.name }}
            </div>
            <b-badge pill class="bg-white green-link mt-1 ml-auto">
              {{ item.countNotification }}
            </b-badge>
          </nuxt-link>
        </b-list-group-item>
      </b-list-group>
    </div>
  </div>
</template>

<style scoped>
.green-link{
  color: #84CD8B;
}
.bg-inv {
  background-color: #00000000;
}

*:hover {
  text-decoration: none;
}

.link {
  text-decoration: underline white;
}

.container-top {
  background-color: #84CD8B;
  height: 100vh;
}

</style>
<script>

import Back from '@/components/icons/Back'
import Calendar from '@/components/icons/Calendar'
import Cup from '@/components/icons/Cup'
import Bookmark from '@/components/icons/Bookmark'
import Book from '../icons/Book'
import Bell from '../icons/Bell'
import Stats from '../icons/Stats'

export default {
  components: {
    Bell,
    Calendar,
    Back
  },
  // async fetch ({ store }) {
  //   await store.dispatch('user/userInit', this.$cookies.get('token'))
  // },
  data () {
    return {
      links: [{
        to: '/dash',
        icon: Calendar,
        name: 'Мероприятия',
        countNotification: 2,
        isAdmin: false
      }, {
        name: 'Достижения',
        to: '/dash/awards',
        icon: Cup,
        countNotification: 1,
        isAdmin: false
      }, {
        name: 'Мои заявки',
        to: '/dash/requests',
        icon: Bookmark,
        countNotification: 29,
        isAdmin: false
      }, {
        name: 'Мои курсы',
        to: '/dash/course',
        icon: Book,
        countNotification: 2,
        isAdmin: false
      }, {
        name: 'Статистика',
        to: '/statisticAdmin/statAdDay',
        icon: Stats,
        countNotification: 0,
        isAdmin: !this.$route.query.admin
      }],
      color: 'white'
    }
  },
  computed: {
    user () {
      return this.$store.state.user.user
    }
  },
  mounted () {
    this.$store.dispatch('user/userInit', this.$cookies.get('token'))
  }
}
</script>
