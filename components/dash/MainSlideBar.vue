<template>
  <div class="main-slide-bar">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Поиск по мероприятиям" aria-label="Search">
    </form>
    <p class="main-text">
      Вид мероприятия
    </p>
    <div class="form-check">
      <input id="defaultCheck1" class="form-check-input" type="checkbox">
      <label class="form-check-label" for="defaultCheck1">
        Онлайн курсы
      </label>
    </div>
    <div class="form-check">
      <input id="defaultCheck1" type="checkbox" class="form-check-input">
      <label class="form-check-label" for="defaultCheck1">
        Оффлайн курсы
      </label>
    </div>
    <p class="main-text">
      Тип мероприятия
    </p>
    <div class="form-check">
      <input id="defaultCheck1" class="form-check-input" type="checkbox">
      <label class="form-check-label" for="defaultCheck1">
        Бизнес
      </label>
    </div>
    <div class="form-check">
      <input id="defaultCheck1" type="checkbox" class="form-check-input">
      <label class="form-check-label" for="defaultCheck1">
        Лидерство
      </label>
    </div>
    <div class="form-check">
      <input id="defaultCheck1" type="checkbox" class="form-check-input">
      <label class="form-check-label" for="defaultCheck1">
        Боевая слава
      </label>
    </div>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css" scoped>
.main-slide-bar{
  position: fixed;
  top: 0;
  right:0;
  width: 300px;
  height: 100vh;
  border: 1px solid #000;
  background-color: #fff;
  z-index: 3;
}
.form-control{
  width: 276px;
  height: 46px;
  margin-top: 56px;
  margin-left: 36px;
  margin-right: 36px;
}
.main-text{
  margin-top: 40px;
  margin-left: 36px;
  font-style: normal;
  font-weight: bold;
  font-size: 20px;
  line-height: 30px;
  display: flex;
  align-items: center;
  color: #6C757D;
}
.form-check-label{
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  color: #212529;
  cursor: pointer;
}
.form-check{
  display: flex;
  margin-left: 41px;
  margin-bottom: 10px;
}
</style>
