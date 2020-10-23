<template lang="html">
  <div class="wrappen">
    <nav>
      <div class="logo-link">
        <nuxt-link to="/">
          <img src="../../static/img/main-logo.svg" alt="">
        </nuxt-link>
      </div>
    </nav>
    <section>
      <div class="registr">
        <div class="registr-text">
          <h3 class="registr-text-main">
            Личный кабинет
          </h3>
        </div>
        <nav>
          <div class="social-network">
            <img src="~/static/img/Group41.svg" alt="vk" class="registr-img">
            <img src="~/static/img/Group39.svg" alt="facebook" class="registr-img">
            <img src="~/static/img/Group38.svg" alt="google" class="registr-img">
            <img src="~/static/img/Group42.svg" alt="odnoclassniki" class="registr-img">
          </div>
        </nav>
        <form class="registr-form">
          <label for="username" class="registr-name">Логин</label>
          <br>
          <input type="text" class="registr-input-name" placeholder="Введите логин или эллектронную почту">
          </input>
          <br>
          <label for="userpas" class="registr-name">Пароль</label>
          <br>
          <input type="password" class="registr-input-pas" placeholder="Введите пароль">
          </input>
          <br>
          <div class="under-form">
            <div>
              <input type="checkbox" class="registr-chek">
              <label for="userchek" class="registr-chek-text">Запомните меня</label>
            </div>
            <div>
              <nav>
                <a href="#" class="forget-pas">
                  Не помню пароль
                </a>
              </nav>
            </div>
          </div>
          <div class="registr-but">
            <button type="submit" name="button" class="registr-button">
              Регистрация
            </button>
            <button type="submit" name="button" class="registr-button">
              Войти
            </button>
          </div>
        </form>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  layout: 'Register'
}
</script>

<style lang="css" scoped>

.wrappen{
  width: 600px;
  margin: 0 auto;
}
.logo-link{
  width: 60%;
  margin: 0 auto;
}
.registr{
  width: 100%;
  margin-top: 56px;
  margin-bottom: 56px;
  height: 489px;
  border: 2px solid #DFDFDF;
  border-radius: 8px;
}
.registr-text{
  width: 100%;
  text-align: center;
  margin-top: 32px;
  font-weight: 400;
  font-style: normal;
  line-height: 46px;
}
.registr-text-main{
  font-family: 'SF Pro Display';
    font-size:42px;
}
.social-network{
  width: 100%;
  display: flex;
  justify-content: center;
  margin-left: 10px;
  margin-top: 20px;
}
.registr-img{
  margin-right: 20px
}
.registr-form{
  width: 90%;
  margin: 0 auto;
  margin-top: 20px;
}
.registr-name{
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 24px;
}
.registr-input-name{
  width: 100%;
  height: 46px;
  border: 1px solid #CED4DA;
  box-sizing: border-box;
  border-radius: 4.8px;
  font-size: 20px;
  line-height: 30px;
  padding-left: 16px;
  margin-bottom: 24px;
}
.registr-input-pas{
  width: 100%;
  height: 46px;
  border: 1px solid #CED4DA;
  box-sizing: border-box;
  border-radius: 4.8px;
  font-size: 20px;
  line-height: 30px;
  padding-left: 16px;
  margin-bottom: 17px;
}
.under-form{
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.registr-chek{
  border: 1px solid #CED4DA;
}
.registr-chek-text{
  margin-left: 7px;
}
.forget-pas{
  height: 19px;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 120%;
  border-bottom:1.5px solid #2D9CDB;
  color: #2D9CDB;
}
.forget-pas:hover{
  text-decoration: none;
}
.registr-but{
  width: 100%;
  display: flex;
  margin-top: 14px;
  justify-content: space-between;
}
.registr-button{
  width: 258px;
  height: 50px;
  color: #84CD8B;
  background: #fff;
  border-radius: 4.8px;
  border: 2px solid #84CD8B;
  outline: 0;
}
.registr-button:hover{
  background: #84CD8B;
  color: #fff;
}
</style>
<style>
  *{
    font-family: 'SF Pro Display', serif;
  }
</style>
