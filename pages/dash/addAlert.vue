<template lang="html">
  <div>
  <div class="btnReady">
    <b-button class="btn2 btn-success">
      <nuxt-link class="www" to="/dash/alerts">&#60; Вернуться</nuxt-link>
    </b-button>
  </div>
  <div class="form">
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
        <label class="faster-form-header-text2">Текст</label>
      </div>
      <div class="fastreg-form1">
        <div class="faster-form-block1">
          <div>
          <label class="faster-form-name">Наименование отправителя*</label>
          <input type="text" class="faster-form-input-name" placeholder="Введите название">
          <label class="faster-form-header">Заголовок*</label>
          <input type="text" class="faster-form-input-head" placeholder="Введите заголовок">
          </div>
          <VueTags v-model="tags">
            <div
              slot-scope="{tag_e,removeTag,inputEventHandlers,inputBindings }"
              class=""
            >
              <label>Рассылки</label>
              <input
                class="form-control"
                placeholder="Напишите темы на рассылку сообщений"
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
          <!--          </nuxt-link>-->
        </div>
      </div>
    </form>
  </div>
    <input type="text" class="faster-form-input-text" placeholder="Введите текст">
  </div>
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
  .btn2{
    background: #84CD8B;
    outline: none;
    border: none;
    font-size: 20px;
    margin: 56px 0 0 484px;
  }
  .form{
    width: 952px;
    height: 632px;
    outline: 0;
    border: solid;
    border-radius: 10px;
    border-color: #DFDFDF;
    padding-top: 48px;
    margin-top: 50px;
    margin-left: 484px;
  }
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
  .www{
    color: white;
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
  .faster-form-input-name{
    margin-bottom: 15px;
  }
  .faster-form-input-head{
    margin-bottom: 15px;
    width: 540px;
    height: 46px;
    border: 1px solid #CED4DA;
    box-sizing: border-box;
    border-radius: 4.8px;
    padding-left: 16px;
  }
  .faster-form-input-text{
    width: 856px;
    height: 169px;
    border: 1px solid #CED4DA;
    border-radius: 4.8px;
    padding-left: 16px;
    margin: 48px 0 48px 48px;
  }
  .faster-form-header-text2{
    padding-top: 20px;
  }
</style>
