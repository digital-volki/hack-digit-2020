<template lang="html">
  <div class="fastreg">
    <form class="fastreg-form-all" @submit.prevent="onSubmit">
      <div class="fastreg-form">
        <div class="fastreg-form-block">
          <input id="form-input" type="file" class="fastreg-form-input">
          <label for="form-input" class="faster-form-label">
            <div class="faster-form-foto">
              <img src="../../static/img/camera.svg" alt="фото">
            </div>
            <label class="faster-form-label-foto">Загрузите ваше фото</label>
          </label>
        </div>
      </div>
      <div class="fastreg-form1">
        <div class="faster-form-block1">
          <label class="faster-form-name">ФИО*</label>
          <input type="text" class="faster-form-input-name" placeholder="Введите ваше ФИО">
          <div class="faster-form-email-password">
            <div>
              <label class="faster-form-email">Почта*</label>
              <br>
              <input v-model="userAuth.login" type="text" class="faster-form-input-email" placeholder="Введите вашу почту">
            </div>
            <div>
              <label class="faster-form-password">Пароль*</label>
              <br>
              <input v-model="userAuth.password" type="text" class="faster-form-input-password" placeholder="Введите пароль">
            </div>
          </div>
          <div class="fastreg-form-chek">
            <input type="checkbox">
            <label>Я принимаю условия <span class="faster-form-chek-link">Пользовского соглашения</span></label>
          </div>
          <VueTags v-model="tags">
            <div
              slot-scope="{tag_e,removeTag,inputEventHandlers,inputBindings }"
              class=""
            >
              <input
                class="form-control"
                placeholder="Add tag..."
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
          <!--                    <nuxt-link>-->
          <button type="submit" name="button" class="faster-form-reg-button">
            Регистрация
          </button>
          <!--          </nuxt-link>-->
        </div>
      </div>
    </form>
  </div>
</template>

<script>

import VueTags from 'vue-tags'

export default {
  components: {
    VueTags
  },
  data () {
    return {
      tags: ['Laravel', 'Vue js'],
      userAuth: {
        login: 'admin',
        password: 'admin'
      }
    }
  },
  methods: {
    onSubmit () {
      this.$store.dispatch('user/getUser', this.userAuth)
      // this.$nuxt.$router.push('/dash')
    }
  }
}
</script>

<style lang="css" scoped>
.fastreg{
  width: 856px;
  margin: 0 auto;
}
.fastreg-form-all{
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
}
.fastreg-form{
  width: 282px;
  position: relative;

}
.fastreg-form1{
  width: 540px;
}
.fastreg-form-block{
  height: 100%;
  background-color: #F2F2F2;
}
.fastreg-form-input{
  opacity: 0;
}
.faster-form-label{
  width: 100%;
  height: 100%;
  cursor: pointer;
}
.faster-form-foto{
  width: 31%;
  height: 28%;
  margin: 0 auto;
  margin-top: 57px;
}
.faster-form-label-foto{
  width: 100%;
  color: #6C757D;
  text-align: center;
}
.faster-form-input-name{
  width: 540px;
  height: 46px;
  border: 1px solid #CED4DA;
  box-sizing: border-box;
  border-radius: 4.8px;
  padding-left: 16px;
}
.faster-form-email-password{
  margin-top: 25px;
  display: flex;
  justify-content: space-between;
}
.faster-form-input-email{
  width: 258px;
  height: 46px;
  border: 1px solid #CED4DA;
  box-sizing: border-box;
  border-radius: 4.8px;
  padding-left: 16px;
}
.faster-form-input-password{
  width: 258px;
  height: 46px;
  border: 1px solid #CED4DA;
  box-sizing: border-box;
  border-radius: 4.8px;
  padding-left: 16px;
}
.fastreg-form-chek{
  margin-top: 20px;
}
.faster-form-chek-link{
  cursor: pointer;
  color:#2D9CDB;
  text-decoration: underline;
}
.faster-form-reg-button{
  width: 540px;
  height: 50px;
  margin-top: 26px;
  outline: 0;
  color:#fff;
  background-color: #84CD8B;
  border: 0;
  font-size: 20px;
}
</style>
