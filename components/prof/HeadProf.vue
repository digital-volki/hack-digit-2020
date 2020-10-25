<template>
  <div class="header-prof">
    <div class="prof-img">
      <img src="../../static/img/fotoprof.svg" alt="foto">
    </div>
    <div class="prof-content">
      <div>
        <span class="prof-name-user">Кузьмин Кирилл</span>
        <div class="prof-attain">
          <img src="@/static/img/Group.svg" alt="mk">
          <span class="prof-attain-name">Провидец</span>
        </div>
      </div>
      <div class="prof-all-elements">
        <div class="prof-rating">
          <div class="prof-rating-crown">
            <div>
              <img src="@/static/img/crown-solid.svg" alt="crown">
            </div>
            <div>
              <span class="prof-rating-crown-text">Знания(120)</span>
            </div>
          </div>
          <div class="prof-rating-star">
            <div>
              <img src="@/static/img/star.svg" alt="star">
            </div>
            <div>
              <span class="prof-rating-star-text">Репутация(64)</span>
            </div>
          </div>
        </div>
        <div class="prof-rating-link">
          <nuxt-link to="/dash/ratingPage" class="rating-link-know">
            Рейтинг по знаниям
          </nuxt-link>
          <nuxt-link to="/dash/ratingPage" class="rating-link-know">
            Рейтинг по репутации
          </nuxt-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css" scoped>
.header-prof{
  width:1110px;
  display: flex;
  justify-content: flex-start;
}
.prof-content{
  margin-left: 24px;
  margin-top: 20px;
}
.prof-name-user{
  font-style: normal;
  font-weight: 500;
  font-size: 32px;
  line-height: 38px;
  color: #212529;
}
.prof-attain{
  margin-top: 7px;
  display: flex;
}
.prof-attain-name{
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  line-height: 32px;
  color: #2C2C2C;
  margin-left: 8px;
}
.prof-content{
  width: 950px;
  height: 115px;
  display: flex;
  justify-content: space-between;
  border-bottom: 2px solid #999;
}
.prof-all-elements{
  margin-top: 5px;
}
.prof-rating{
  width: 400px;
  display: flex;
  justify-content: space-between;
}
.prof-rating-crown{
  height: 50px;
  display: flex;
  justify-content: flex-start;
}
.prof-rating-crown-text{
  margin-left: 12px;
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  color: #FFC400;
}
.prof-rating-link{
  display: block;
}
.prof-rating-star{
  height: 50px;
  display: flex;
  justify-content: flex-start;
}
.prof-rating-star-text{
  margin-left: 12px;
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  color: #FF8A00;
}
.prof-rating-link{
  width: 380px;
  display: flex;
  justify-content: space-between;
}
.rating-link-know{
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 19px;
  text-decoration-line: underline;
  color: #2D9CDB;
}
</style>
