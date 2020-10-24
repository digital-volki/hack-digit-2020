<template>
  <div class="course-page">
    <div class="flex-item">
      <h1 class="course-page-head">
        Финансовая грамотнось
      </h1>
      <button type="button" name="button" class="course-admin-button">
        Изменить
        <img src="@/static/img/pen.svg" alt="pen" class="img-in-button">
      </button>
    </div>
    <div class="info-button">
      <nuxt-link to="/courseAd/curAd">
        <button type="button" name="button" class="button-info">
          Информация
        </button>
      </nuxt-link>
      <nuxt-link to="/statisticAdmin/statAdDay">
        <button type="button" name="button" class="button-stat">
          Статистика
        </button>
      </nuxt-link>
    </div>
    <div class="all-element">
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
                    <img src="@/static/img/raitng.svg" alt="">
                    <span class="info-page">Рейтинг</span>
                  </div>
                  <div>
                    <span class="info-page"> <img src="@/static/img/Group343.svg" alt="">4.8</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="course-topic-page">
          <div class="topic-curse-head">
            Этапы курсов
          </div>
          <div v-for="(course,index) in courses" :key="index" class="topic-course-card-all">
            <div class="topic-course-card">
              <span class="Number">{{ course.number }}</span>
              <span class="Title">{{ course.name }}</span>
              <div class="Time">
                <img src="@/static/img/time.svg" alt="">
                <span class="time-text">{{ course.time }}</span>
              </div>
            </div>
            <div class="proces">
              В процессе
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      courses: [
        {
          number: '1',
          name: 'Теория грамотности',
          time: '01:05:44'
        },
        {
          number: '2',
          name: 'Тест "Финансовая грамотность"',
          time: '00:26:44'
        }
      ]
    }
  },
  layout: 'dash'
}
</script>

<style lang="css" scoped>
.course-page{
  width: 1110px;
}
.all-element{
  border: 1px solid #DFDFDF;
}
.flex-item{
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.img-in-button{
  padding-left: 5px;
}
.course-admin-button{
  width: 168px;
  height: 46px;
  font-size: 20px;
  background-color: #84CD8B;
  outline:0;
  border: none;
  color:#fff;
  border-radius: 4.8px;
}
.info-button{
  margin-top: 32px;
  margin-left: 23px;
}
.button-stat{
  width:176px;
  height: 55px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 0px 8px 0px 0px;
  outline: 0;
  background-color: #fff;
  font-style: normal;
  font-weight: normal;
  margin-left: -5px;
  font-size: 24px;
  line-height: 120%;
  color: rgba(33, 37, 41, 0.5);
}
.button-info{
  width:176px;
  height: 55px;
  margin-left: -22px;
  border: 2px solid #84CD8B;
  box-sizing: border-box;
  border-radius: 8px 0px 0px 0px;
  outline: 0;
  background: #84CD8B;
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  line-height: 120%;
  color: #FFFFFF;
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
  width: 1046px;
  height: 364px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  margin-top: 32px;
  margin-left: 32px;
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
.course-page-info-and-course{
  display: flex;
  justify-content: space-between;
}
.course-page-info{
  width: 508px;
  height: 262px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
  margin-top: 30px;
  margin-left: 32px;
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
.course-topic-page{
  width: 508px;
  height:262px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
  margin-top: 30px;
  margin-right: 32px;
  margin-bottom: 32px;
}
.topic-curse-head{
  margin-left: 32px;
  margin-top: 32px;
  font-style: normal;
  font-weight: bold;
  font-size: 20px;
  line-height: 120%;
  display: flex;
  align-items: flex-end;
  color: #212529;
}
.topic-course-card-all{
  width: 444px;
  height: 76px;
  display: flex;
  justify-content: space-between;
  border: 2px solid #DFDFDF;
  margin-top: 24px;
  margin-bottom: -24px;
  margin-left: 32px;
}
.topic-course-card{
  margin-left: 16px;
  margin-top: 12px;
}
.Number{
  padding-top:1px;
  padding-bottom: 1px;
  padding-left: 6px;
  padding-right: 6px;
  background-color: #84CD8B;
  color:#fff;
  border-radius: 4px;
}
.Title{
  margin-left: 10px;
}
.Time{
  margin-top: 8px;
}
.time-text{
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 120%;
  margin-left: 7px;
  color: #212529;
}
.proces{
  width: 75px;
  height: 18px;
  margin-top: 15px;
  margin-right: 30px;
  background: #84CD8B;
  border-radius: 4px;
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  line-height: 12px;
  color: #FFFFFF;
  text-align: center;
  padding-top: 1px;
}
</style>
