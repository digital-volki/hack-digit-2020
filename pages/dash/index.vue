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
      <nuxt-link v-for="(item, index) in pl" :key="index" :to="!isAdmin ? '/courPage/courPage' : 'courseAd/curAd'" class="col-4">
        <Card :panel="isAdmin" :model="item" />
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
  asyncData (ctx) {
    ctx.store.dispatch('events/getAllNot')
  },
  data () {
    return {
      isAdmin: this.$route.query.admin,
      pl: [
        {
          tags: ['Внутреннее'],
          name: 'Уроки лидерства',
          img_link: '1',
          desc: 'Начните развивать свои лидерские качества еще в школе. Спикер  '
        },
        {
          tags: ['Партнеры'],
          name: 'Финансовая грамотн...',
          img_link: '2',
          desc: 'Научитесь контролировать свои расходы и доходы, планировать '
        },
        {
          tags: ['Лидеры России'],
          name: 'RE_project',
          img_link: '3',
          desc: 'Школа социальных инициатив направлена на популяризацию и '
        },
        {
          tags: ['Бизнес'],
          name: 'Урок Памяти и Славы',
          img_link: '4',
          desc: 'Some quick example text to build on the card title and ... '
        },
        {
          tags: ['Бизнес'],
          name: 'Secon 2020',
          img_link: '5',
          desc: 'Международная конференция разработчиков программного ...'
        },
        {
          tags: ['Лидеры России'],
          name: 'Digital Lab',
          img_link: '6',
          desc: 'Данный проект направлен на социально-активную молодежь, ...  '
        },
        {
          tags: ['Бизнес'],
          name: 'Уроки инвестирования',
          img_link: '7',
          desc: 'На протяжении всей своей жизни мы имеем дело с деньгами. Мы'
        },
        {
          tags: ['Эльбрус'],
          name: 'Бизнес-инкубатор',
          img_link: '8',
          desc: 'Студенческий клуб «Молодежный бизнес-инкубатор» - является'
        }
      ]
    }
  },
  computed: {
    events () {
      return this.$store.state.events.length
    }
  },
  layout: 'dash'
}
</script>

<style scoped>
a {
  text-decoration: none !important;
}
.row{
  width: 900px;
}
div {
  font-size: 35px;
}
</style>
