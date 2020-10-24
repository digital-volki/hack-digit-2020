<template>
  <div class="p-5 d-flex w-100">
    <div class="w-100">
      <div class="d-block">
        Активность за последний год
      </div>
      <div class="border rounded-lg d-inline-flex">
        <HeatMap />
      </div>
      <div class="d-block mt-5">
        Достижения
      </div>
      <div v-for="i in 20" :key="i" class="d-flex  w-100 align-items-center">
        <div class="p-3">
          <Fire />
        </div>
        <div class="flex-fill p-3">
          Энтузиаст <br>
          Учитесь 3 дня подряд<br>
          <b-progress
            class="mt-2 rounded-pill"
            :max="100"
            height="2rem"
            show-value
          >
            <b-progress-bar :value="30" variant="success" />
          </b-progress>
        </div>
      </div>
    </div>
    <div class="m-5">
      <Banner />
      <div class="m-3 p-3 shadow w-75 rounded-lg text-center">
        <div class="call">
          +10
        </div>
        <br>
        <span class="sub">
          Получи баллы
        </span>
        <br>
        Пройди полную регистрацию
        и получи баллы к репутации
      </div>
    </div>
  </div>
</template>

<script>
import Fire from '../../components/icons/Fire'
import Banner from '../../components/icons/Banner'
import HeatMap from '~/components/dash/HeatMap/HeatMap'

export default {
  name: 'Profile',
  components: {
    Banner,
    Fire,
    HeatMap
  },
  layout: 'DashProfile'
}
</script>

<style scoped>

.sub{
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 29px;

  color: #2C2C2C;
}

.call{
  font-style: normal;
  font-weight: bold;
  font-size: 82px;
  line-height: 98px;
}

.d-block{
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 29px;
  color: #212529;
}
</style>
