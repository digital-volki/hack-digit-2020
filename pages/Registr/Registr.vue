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
          <h3 class="registr-text-main">Личный кабинет</h3>
        </div>
        <nav>
          <div class="social-network">
              <img src="~/static/img/Group41.svg" alt="vk" class="registr-img">
              <img src="~/static/img/Group39.svg" alt="facebook" class="registr-img">
              <img src="~/static/img/Group38.svg" alt="google" class="registr-img">
              <img src="~/static/img/Group42.svg" alt="odnoclassniki" class="registr-img">
          </div>
        </nav>
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

</style>
<style>
  *{
    font-family: 'SF Pro Display', serif;
  }
</style>
