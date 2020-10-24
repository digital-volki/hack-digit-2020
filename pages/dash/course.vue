<template>
  <div class="course">
    <header-prof />
    <section>
      <div class="my-course">
        <h3 class="my-course-text">
          Мои курсы
        </h3>
        <div class="my-course-all-component">
          <div v-for="(item, index) in items" :key="index" :Info="item" class="my-course-component">
            <img :src="`/img/${item.img}`" alt="">
            <div class="my-course-component-text">
              <div>
                <p class="my-course-name-component-text">
                  {{ item.course }}
                </p>
              </div>
              <div>
                <p class="my-course-component-text-name">
                  {{ item.name }}
                </p>
              </div>
            </div>
            <div class="my-course-ass">
              <button type="button" class="img-arrow-down" @click="item.isDrop = !item.isDrop">
                <img src="@/static/img/icon.svg" alt="">
              </button>
              <div v-if="item.isDrop" class="dropdown">
                <nuxt-link to="/" class="dropdown-text">
                  Покинуть
                </nuxt-link>
                <nuxt-link to="/" class="dropdown-text1">
                  Поделиться
                </nuxt-link>
              </div>
              <br>
              <div class="my-course-ass-raiting">
                <img src="@/static/img/Group343.svg" alt="">
                <p class="my-course-ass-raiting-number">
                  {{ item.raiting }}
                </p>
                <img src="@/static/img/user.svg" alt="" class="img">
                <p class="my-course-ass-raiting-number">
                  1000
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import HeaderProf from '@/components/prof/HeadProf'
export default {
  components: {
    HeaderProf
  },
  layout: 'dash',
  data () {
    return {
      items: [
        {
          isDrop: false,
          course: 'Финансовая грамотность',
          name: 'Дмитрий Александрович',
          img: 'Group341.svg',
          raiting: '4.8'
        },
        {
          isDrop: false,
          course: 'Финансовая грамотность',
          name: 'Дмитрий Александрович',
          img: 'Group341.svg',
          raiting: '4.8'
        },
        {
          isDrop: false,
          course: 'Финансовая грамотность',
          name: 'Дмитрий Александрович',
          img: 'Group341.svg',
          raiting: '4.8'
        }
      ]
    }
  }
}
</script>

<style lang="css" scoped>
.my-course{
  margin-top: 56px;
}
.my-course-text{
  font-style: normal;
  font-weight: 300;
  font-size: 42px;
  line-height: 46px;
  display: flex;
  align-items: flex-end;
  color: #373A3C;
}
.my-course-all-component{
  width: 730px;
  margin-top: 32px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
}
.my-course-component{
  width: 682px;
  margin-left: 24px;
  margin-top: 24px;
  display: flex;
  padding-bottom: 20px;
  border-bottom: 1px solid #DFDFDF;;
}
.my-course-component-text{
  margin-left: 22px;
  margin-top: 15px;
}
.my-course-name-component-text{
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 29px;
  color: #212529;
}
.my-course-component-text-name{
  font-style: normal;
  font-weight: normal;
  margin-top: 14px;
  font-size: 20px;
  line-height: 24px;
  color: rgba(33, 37, 41, 0.6);
}
.my-course-ass-raiting{
  display: flex;
  margin-top: 20px;
}
.my-course-ass-raiting-number{
  margin-top: none;
  margin-left: 6px;
}
.my-course-ass{
  margin-left: 40px;
  margin-top: 40px;
}
.img-arrow-down{
  background: #fff;
  outline: 0;
  border: none;
  float:right;
  margin-top: -30px;
}
.img{
  margin-left: 18px;
}
.dropdown{
  box-shadow: 0px 2px 4px rgba(33, 37, 41, 0.1);
  border-radius: 4px;
  position: absolute;
  width: 192px;
  height: 80px;
  background-color: #fff;
  border: 1px solid #DFDFDF;
  margin-top: 5px;
}
.dropdown-text{
  position: relative;
  top:12px;
  left:24px;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 24px;
  display: flex;
  align-items: center;
  color: #212529;
  flex: none;
  order: 0;
  align-self: stretch;
  flex-grow: 0;
  margin: 0px 0px;
}
.dropdown-text1{
  position: relative;
  top:20px;
  left:24px;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 24px;
  display: flex;
  align-items: center;
  color: #212529;
  flex: none;
  order: 0;
  align-self: stretch;
  flex-grow: 0;
  margin: 0px 0px;
}
</style>
