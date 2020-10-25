<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="header-stat">
        <div>
          <a class="navbar-brand" href="#">Статистика</a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span class="navbar-toggler-icon">
              fr
            </span>
          </button>
        </div>
        <div id="navbarNav" class="nav-static">
          <ul class="navbar-nav">
            <li class="nav-item">
              <nuxt-link class="nav-link" href="#" active-class="active" to="/statistics/statisticsDay">
                За день
              </nuxt-link>
            </li>
            <li class="nav-item">
              <nuxt-link class="nav-link" href="#" active-class="active" to="/statistics/statisticsWeek">
                За неделю
              </nuxt-link>
            </li>
            <li class="nav-item">
              <nuxt-link class="nav-link" href="#" active-class="active" to="/statistics/statisticsMonth">
                За месяц
              </nuxt-link>
            </li>
            <li class="nav-item">
              <nuxt-link class="nav-link" href="#" active-class="active" to="/statistics/statisticsAllTime">
                За все время
              </nuxt-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="all-course">
      <div>
        <div class="popular-course-rus">
          <span class="popular-course-text">
            <h3 class="popular-course-title">
              Лидеры России
            </h3>
            <h3 class="popular-course-look">
              Показать по 5
              <img src="@/static/img/arrow.svg">
            </h3>
          </span>
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="table-course" scope="col">
                  Курс
                </th>
                <th scope="col" class="number-man">
                  Количество записавшихся
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <nuxt-link to="/">
                  <td>Secaton 2018</td>
                </nuxt-link>
                <td>10000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Будь в курсе</td>
                </nuxt-link>
                <td>9000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>8000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>5000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>4000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="popular-course">
          <span class="popular-course-text">
            <h3 class="popular-course-title">
              популярный курс
            </h3>
            <h3 class="popular-course-look">
              Показать по 5
              <img src="@/static/img/arrow.svg">
            </h3>
          </span>
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="table-course" scope="col">
                  Курс
                </th>
                <th scope="col" class="number-man">
                  Количество записавшихся
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <nuxt-link to="/">
                  <td>Secaton 2018</td>
                </nuxt-link>
                <td>10000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Будь в курсе</td>
                </nuxt-link>
                <td>9000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>8000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>5000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>4000</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col" class="table-course">
                  Курс
                </th>
                <th scope="col" class="number-man">
                  Количество записавшихся
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <nuxt-link to="/">
                  <td>Secaton 2018</td>
                </nuxt-link>
                <td>10000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>
                    Будь в курсе
                  </td>
                </nuxt-link>
                <td>9000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>8000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>5000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>4000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="popular-course-suc">
          <span class="popular-course-text">
            <h3 class="popular-course-title">
              Успешные курсы
            </h3>
            <h3 class="popular-course-look">
              Показать по 5
              <img src="@/static/img/arrow.svg">
            </h3>
          </span>
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="table-course" scope="col">
                  Курс
                </th>
                <th scope="col" class="number-man">
                  Количество записавшихся
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <nuxt-link to="/">
                  <td>Secaton 2018</td>
                </nuxt-link>
                <td>10000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Будь в курсе</td>
                </nuxt-link>
                <td>9000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>8000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>5000</td>
              </tr>
              <tr>
                <nuxt-link to="/">
                  <td>Здоровые дети</td>
                </nuxt-link>
                <td>4000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div>
        <div>
          <div class="visit-server">
            <h3 class="popular-course-text popular-course-title">
              Посещение сервера
            </h3>
            <span class="info-viit-serve">
              <span>
                <p class="time-info">24 мин</p>
                <p class="time-text">время нахождения на сайте</p>
              </span>
              <span class="text-info-visit">
                <p class="time-info">1024</p>
                <p class="time-text">посетило людей сайт</p>
              </span>
            </span>
            <div class="stata">
              <img src="@/static/img/stata.svg" alt="">
            </div>
            <button type="button" name="button" class="detail-info">
              Детали <img src="@/static/img/arrow-right.svg" alt="" class="img-arrow">
            </button>
          </div>
          <div class="info-reg">
            <h3 class="popular-course-text popular-course-title">
              зарегистрированные
            </h3>
            <img src="~/static/img/sercle.svg" alt="" class="secle-stat">
            <span class="reg-text">
              <p class="fullreg-number">
                1000 из 2400 чел.
              </p>
              <p class="fullreg-text">
                Полная регистрация
              </p>
            </span>
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
.header-stat{
  width: 1110px;
  display: flex;
  justify-content: space-between;
}
.all-course{
  width:1110px;
  display: flex;
  justify-content: space-between;
  margin-top:32px;
  margin-left: 23px;
}
.navbar-brand{
  font-style: normal;
  font-weight: 300;
  font-size: 42px;
  line-height: 46px;
  display: flex;
  align-items: flex-end;
  color: #373A3C
}
.nav-static{
  width: 558px;
  margin-top: 24px;
}
.navbar-nav{
  display: flex;
  justify-content: space-around;
}
.nav-item{
  padding-left: 15.5px;
  padding-right: 15.5px;
  width: auto;
  border-bottom:2px solid #CED4DA;
}
.active{
  padding-left: 15.5px;
  padding-right: 15.5px;
  border-bottom: 3px solid #84CD8B;
}
.nav-link{
  height: 24px;
  font-style: normal;
  font-weight: normal;
  padding-bottom: 7px;
  font-size: 20px;
  line-height: 120%;
  display: flex;
  align-items: flex-end;
  color: #373A3C;
}
.popular-course{
  width:608px;
  height: 841px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
}
.popular-course-rus{
  width:608px;
  height: 501px;
  margin-bottom: 20px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
}
.popular-course-suc{
  width:608px;
  height: 501px;
  margin-top: 20px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
}
.popular-course-text{
  width: 500px;
  display: flex;
  justify-content: space-between;
  margin-top: 52px;
  margin-left: 40px;
}
.popular-course-title{
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 120%;
  display: flex;
  align-items: flex-end;
  text-transform: uppercase;
  color: rgba(33, 37, 41, 0.4);
}
.popular-course-look{
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  line-height: 30px;
  color: rgba(33, 37, 41, 0.4);
}
.table{
  width:525px;
  margin-left: 40px;
  margin-top: 32px;
}
.table-course{
  width:228px;
  background: #84CD8B;
  box-shadow: 0px -1px 0px #ECEEEF;
  font-style: normal;
  font-weight: 600;
  font-size: 20px;
  line-height: 24px;
  color: #FFFFFF;
}
.number-man{
  background: #84CD8B;
  box-shadow: 0px -1px 0px #ECEEEF;
  font-style: normal;
  font-weight: 600;
  font-size: 20px;
  line-height: 24px;
  color: #FFFFFF;
}
.visit-server{
  width: 475px;
  height: 475px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
}
.info-viit-serve{
  width: 318px;
  margin-left: 40px;
  margin-top: 32px;
  display: flex;
  justify-content: space-between;
}
.time-info{
  font-style: normal;
  font-weight: 600;
  font-size: 32px;
  line-height: 120%;
  display: flex;
  align-items: flex-end;
  color: #373A3C;
}
.time-text{
  font-style: normal;
  width: 150px;
  font-weight: 500;
  font-size: 16px;
  line-height: 120%;
  display: flex;
  align-items: flex-end;
  color: rgba(55, 58, 60, 0.6);
}
.text-info-visit{
  margin-left: 45px;
}
.stata{
  width: 395px;
  height: 122px;
  border: 1px solid #000;
  margin-left: 40px;
  margin-top: 32px;
}
.detail-info{
  width:213px;
  height: 50px;
  outline: 0;
  background: #84CD8B;
  border-radius: 4px;
  float: right;
  margin-right: 40px;
  margin-top: 24px;
  border: none;
  color: #fff;
}
.img-arrow{
  padding-left: 14px;
}
.info-reg{
  width: 475px;
  height: 305px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
  margin-top: 30px;
}
.reg-text{
  margin-top: 64px;
  float: right;
  margin-right: 65px;
}
.fullreg-number{
  font-style: normal;
  font-weight: 500;
  font-size: 24px;
  line-height: 120%;
  color: #212529;
}
.fullreg-text{
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  line-height: 120%;
  color: #212529;
}
</style>
