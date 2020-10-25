<template>
  <div class="all-item">
    <p class="profile-text">
      <span class="profile-link-text">
        Региональная школа социальных инициатив #RE_project
      </span>
      >Личная информация
    </p>
    <form class="form">
      <div class="element-form">
        <img src="@/static/img/foto.svg" alt="foto" class="profile-foto">
      </div>
      <div class="element-form input-form">
        <div class="form-group">
          <label for="formGroupExampleInput">ФИО*</label>
          <input id="formGroupExampleInput" type="text" class="form-control" placeholder="Кузьмин Кирилл Алексанжрович">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Почта*</label>
          <input id="formGroupExampleInput2" type="email" class="form-control" placeholder="nik.anikin.01@bk.ru">
        </div>
        <div class="form-group">
          <label for="inputState">Навыки*</label>
          <select id="inputState" class="form-control">
            <option selected>Выберите навыков</option>
            <option>...</option>
          </select>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  layout: 'DashProfile',
  name: 'EditProfile'
}
</script>

<style scoped>
.all-item{
  margin-top: 52px;
  margin-left: 54px;
}
.profile-text{
  font-style: normal;
  font-weight: normal;
  font-size: 14px;
  line-height: 24px;
  text-decoration-line: underline;
  color: #212529;
  text-decoration: none;
}
.profile-link-text{
  color: #007bff;
  text-decoration: underline;
}
.form{
  width: 952px;
  height: 697px;
  border: 2px solid #DFDFDF;
  box-sizing: border-box;
  border-radius: 8px;
  display: flex;
}
.element-form{
  height:319px;
  margin-left: 48px;
  margin-top:48px;
}
.input-form{
  margin-top: 57px;
}
.form-group{
  margin-top: 10px;
  margin-bottom: 20px;
}
.form-control{
  width: 540px;
  height: 46px;
}
</style>
