<template>
  <div class="p-5 d-flex w-100">
    <div class="w-100">
      <HeadProf />
      <div class="d-block">
        Активность за последний год
      </div>
      <div class="border rounded-lg d-inline-flex">
        <HeatMap />
      </div>
      <form>
        <div class="form-group">
          <label for="formGroupExampleInput">Реферальная ссылка</label>
          <input id="formGroupExampleInput" type="text" class="form-control" placeholder="https://hack-digit-2020.vercel.app/sl/7wc6Y8mjWtf">
        </div>
      </form>
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
import HeadProf from '../../components/prof/HeadProf'
import HeatMap from '~/components/dash/HeatMap/HeatMap'

export default {
  name: 'Profile',
  components: {
    HeadProf,
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
.form-group{
  width: 1073px;
  height: 46px;
  margin-top: 53px;
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 29px;
  color: #212529;
}
</style>
