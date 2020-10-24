<template>
  <div class="course-page">
    <h1 class="course-page-head">
      Финансовая грамотнось
    </h1>
    <div class="course-page-topic">
      <div class="course-page-topic-img">
        <img src="@/static/img/365291.svg" alt="">
      </div>
      <div class="course-page-topic-info">
        <span>
          <nuxt-link to="/" class="course-page-topic-link">
            Мои мероприятия
          </nuxt-link>
        </span>
        <span>
          >Региональная школа социальных инициатив #RE_project
        </span>
        <p class="course-page-topic-title">
          Олег Демидович. Финансовая грамотность
        </p>
        <div class="many-text">
          <p class="many-text-component">
            Научитесь контролировать свои расходы и доходы, планировать и приумножать свой бюджет. Спикер Олег Демиденко, исполнительный директор по маркетингу блока «Сеть Продаж» ПАО «Сбербанк», провел урок по финансовой грамотности.
          </p>
          <p class="many-text-component">
            Что вы узнаете на вебинаре: <br>
            - как грамотно и эффективно планировать финансы;<br>
            - как сберегать и накапливать свой бюджет;<br>
            - какие современные мобильные приложения можно использовать для учета личного бюджета.
          </p>
          <p class="many-text-component">
            Бесплатный вебинар будет интересен тем, кто хочет научиться грамотно распределять свой бюджет
          </p>
          <button type="button" name="button" class="course-page-button">
            Записаться на курс
          </button>
        </div>
      </div>
    </div>
    <div class="course-page-info-and-course">
      <div class="course-page-info">
        <div class="course-page-info-all">
          <span class="main-info">Основная информация</span>
          <div class="main-info-img-all">
            <div class="main-info-img">
              <div>
                <img src="../../static/img/icon.svg" alt="">
                <span class="info-page">Дата создания</span>
              </div>
              <div>
                <span class="info-page">25.10.20</span>
              </div>
            </div>
            <div class="main-info-img">
              <div class="main-info-img">
                <div>
                  <img src="../../static/img/icon1.svg" alt="">
                  <span class="info-page">Спикер</span>
                </div>
                <div>
                  <span class="info-page">Олег</span>
                </div>
              </div>
            </div>
            <div class="main-info-img">
              <div class="main-info-img">
                <div>
                  <img src="../../static/img/icon2.svg" alt="">
                  <span class="info-page">Возраст</span>
                </div>
                <div>
                  <span class="info-page">16-30 лет</span>
                </div>
              </div>
            </div>
            <div class="main-info-img">
              <div class="main-info-img">
                <div>
                  <img src="../../static/img/icon.svg" alt="">
                  <span class="info-page">Рейтинг</span>
                </div>
                <div>
                  <span class="info-page">4.8</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  layout: 'dash'
}
</script>

<style lang="css" scoped>
.course-page{
  width: 1110px;
}
.course-page-head{
  font-style: normal;
  font-weight: 300;
  font-size: 42px;
  line-height: 46px;
  display: flex;
  align-items: flex-end;
  color: #373A3C;
}
.course-page-topic{
  width: 100%;
  height: 432px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  margin-top: 32px;
  border-radius: 8px;
  display: flex;
}
.course-page-topic-img{
  margin-top: 32px;
}
.course-page-topic-info{
  margin-top: 32px;
  margin-left: 30px;
}
.course-page-topic-link{
  text-decoration-line: underline;
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 24px;
  color: #2D9CDB;
}
.course-page-topic-title{
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 120%;
  display: flex;
  align-items: flex-end;
  color: #212529;
  margin-top: 8px;
}
.course-page-topic-text{
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 120%;
  color: #212529;
}
.many-text{
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 120%;
  color: #212529;
}
.many-text-component{
  margin-bottom: 8px;
}
.course-page-button{
  width: 220px;
  height: 46px;
  margin-top: 19px;
  outline: 0;
  border: none;
  background: #84CD8B;
  border-radius: 4.8px;
  color:#fff;
}
.course-page-info{
  width: 540px;
  height: 262px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
  margin-top: 30px;
}
.course-page-info-all{
  margin-left: 32px;
  margin-top: 32px;
}
.main-info{
  font-style: normal;
  font-weight: bold;
  font-size: 20px;
  line-height: 120%;
  display: flex;
  align-items: flex-end;
  color: #212529;
}
.main-info-img-all{
  margin-top: 21px;
}
.main-info-img{
  width: 370px;
  display: flex;
  justify-content: space-between;
  margin-top: 8px;
}
.info-page{
  width: 158px;
height: 19px;
  font-style: normal;
font-weight: normal;
font-size: 16px;
line-height: 120%;
margin-left: 10px;
color: #212529;
}
</style>
