<template>
  <div>
    <nuxt-link class="btnBck" to="/dash/alerts"><div class="btnBack">&#60;</div></nuxt-link>
    <h1><img src="/img/proryv.svg" alt="logo"> Цифровой прорыв</h1>
    <div class="form">
      <h7>Привет!</h7>
      <br/>
      <div class="nyt">
        По многочисленным просьбам трудящихся мы перенесли даты Хакатона
        в Центральном IT-хабе.
        <br/>
        <br/>
        Новые даты Хакатона - 16-18 октября! Теперь не придется отпрашиваться
        с работы в понедельник, а начнем вечером в пятницу!
        <br/>
        <br/>
        Поэтому, если ты еще размышляешь насчет участия, тогда сейчас - тот самый момент, когда пора сказать "Да, я участвую!", собрать команду, выбрать кейс
        и показать все свои цифровые таланты!
        <br/>
        <br/>
        Также напоминаем, что дедлайн подачи заявок на участие - 12 сентября 23:59 по МСК. Поэтому топоропись, такое событие пропускать нельзя!
        <div class="btnReady" data-target="#mm" data-toggle="modal">
          <b-button class="btn btn-success" v-b-modal.modal-1>
            Учавствовать
          </b-button>
        </div>
      </div>
    </div>
    <div
      id="mm"
      class="modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modalForm">

        <b-modal id="modal-1" title="Сообщение" ok-only>
          <p class="my-4">Вы зарегистрированы на мероприятие</p>
        </b-modal>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Proryv',
  layout: 'dash'
}
</script>

<style scoped>
    .btnBack{
      font-size: 40px;
      color: black;
      font-weight: 200;
    }
  h1{
    margin: -48px 0px 0px 38px;
    font-size: 30px;
  }
  .form{
    width: 730px;
    height: 490px;
    outline: 0;
    border: solid;
    border-radius: 10px;
    border-color: #DFDFDF;
    padding-top: 48px;
    margin-top: 50px;
  }
  h7{
    width: 123px;
    height: 24px;
    left: 709px;
    top: 218px;
    padding: 0px 28px 0 304px;
    font-style: normal;
    font-weight: bold;
    font-size: 32px;
    line-height: 24px;
  }
  .nyt{
    margin: 28px 48px 126px 48px;
    width: 634px;
    height: 264px;
    left: 453px;
    top: 270px;

    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 120%;
  }
  .btnReady{
    margin: 32px auto 48px 228px;
  }
  .btn{
    background-color: #84CD8B;
    width: 168px;
    height: 46px;
    outline: none;
    border: none;
    font-size: 20px;
  }
</style>
