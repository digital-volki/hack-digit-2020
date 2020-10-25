<template>
  <div class="all-item">
    <p class="profile-text">
      <span class="profile-link-text">
        Региональная школа социальных инициатив #RE_project
      </span>
      >Личная информация
    </p>
    <form class="form">
      <div class="img-form">
        <div class="element-form">
          <img src="@/static/img/foto.png" alt="foto" class="profile-foto">
        </div>
        <div class="element-form input-form">
          <div class="form-group">
            <label for="formGroupExampleInput">ФИО*</label>
            <input id="formGroupExampleInput" type="text" class="form-control1" placeholder="Кузмин Кирилл Александрович">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Почта*</label>
            <input id="formGroupExampleInput2" type="email" class="form-control1" placeholder="nik.anikin.01@bk.ru">
          </div>
          <div class="form-group">
            <VueTags v-model="tags">
              <div
                slot-scope="{tag_e,removeTag,inputEventHandlers,inputBindings }"
              >
                <label>Выберите навыков*</label>
                <input
                  class="form-control1 stek"
                  placeholder="Выберите навыков"
                  v-bind="inputBindings"
                  v-on="inputEventHandlers"
                >
                <div class="d-flex flex-wrap">
                  <div
                    v-for="(tag, index) in tags"
                    :key="index"
                    class="d-flex "
                  >
                    <button
                      type="button"
                      class="btn btn-light tags-input-remove"
                      @click="removeTag(tag)"
                    >
                      <span>{{ tag }}</span>
                      &times;
                    </button>
                  </div>
                </div>
              </div>
            </VueTags>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label>Область*</label>
          <input type="text" class="form-control" placeholder="Пензенская обл.">
        </div>
        <div class="col">
          <label>Город*</label>
          <input type="text" class="form-control" placeholder="Заречный">
        </div>
        <div class="col">
          <label>Улица*</label>
          <input type="text" class="form-control" placeholder="Светлая">
        </div>
      </div>
      <div class="element-form input-form">
        <div class="form-group">
          <label for="formGroupExampleInput">ФИО*</label>
          <input id="formGroupExampleInput" type="text" class="form-control" placeholder="Кузьмин Кирилл Алексанжрович">
        </div>
        <div class="col">
          <label>Почтовый адрес*</label>
          <input type="text" class="form-control" placeholder="234567">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="inputState">Уровень образования*</label>
          <select id="inputState" class="form-control study">
            <option selected>
              Уровень образования
            </option>
            <option>Начальное</option>
            <option>Среднее</option>
            <option>Высшее</option>
          </select>
        </div>
        <div class="col">
          <label>Наименование учереждения*</label>
          <input type="text" class="form-control study" placeholder="МОУ СОШ №222">
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import VueTags from 'vue-tags'

export default {
  name: 'EditProfile',
  components: {
    VueTags
  },
  layout: 'DashProfile',
  data () {
    return {
      tags: ['Laravel', 'Vue js']
    }
  }
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
  margin-bottom: 50px;
}
.img-form{
  display: flex;
  margin-bottom: 25px;
}
.element-form{
  height:319px;
  margin-left: 48px;
  margin-top:48px;
}
.stek{
  width: 540px;
}
.input-form{
  margin-top: 57px;
}
.form-group{
  margin-top: 10px;
  margin-bottom: 20px;
}
.form-control1{
  width: 540px;
  height: 46px;
}
.row{
  margin-top:25px;
  margin-left: 30px;
}
.form-control{
  width: 275px;
  height: 46px;
}
.study{
  width: 422px;
  margin-top: -10px;
}
</style>
