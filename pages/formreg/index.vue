<template>
  <div class="form-reg">
    <nav>
      <div class="form-logo-link">
        <nuxt-link to="/">
          <img src="../../static/img/main-logo2.svg" alt="vd">
        </nuxt-link>
      </div>
    </nav>
    <section>
      <div class="form-reg-fast">
        <div class="form-reg-link">
          <nav>
            <div class="fast-reg" :class="{ active : isActive }" @click="isActive = true">
              Быстрая регистрация
            </div>
          </nav>
          <nav>
            <div class="full-reg" :class="{ active : !isActive }" @click="isActive = false">
              Полная регистрация
            </div>
          </nav>
        </div>
        <fastreg v-if="isActive" />
      </div>
    </section>
  </div>
</template>

<script>

import Fastreg from '../fastreg/index'

export default {
  components: {
    Fastreg
  },
  data () {
    return {
      isActive: true
    }
  }
}
</script>

<style lang="css" scoped>
.form-reg{
  width: 952px;
  margin: 12px auto;
}
.form-logo-link{
  width: 20%;
  margin: 0 auto;
}
.form-reg-fast{
  width: 100%;
  height: 702px;
  border: 2px solid #DFDFDF;
  margin-top: 56px;
  margin-bottom: 56px;
}
.form-reg-link{
  width: 70%;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  margin-top: 48px;
}
.fast-reg{
font-style: normal;
font-weight: normal;
font-size: 32px;
line-height: 46px;
display: flex;
align-items: flex-end;
color:  rgba(33, 37, 41, 0.4);
cursor: pointer;
}
.fast-reg:hover{
  color:#84CD8B;
  border-bottom: 2px solid #84CD8B;
}
.full-reg{
font-style: normal;
font-weight: normal;
font-size: 32px;
line-height: 46px;
display: flex;
align-items: flex-end;
color:  rgba(33, 37, 41, 0.4);
cursor: pointer;
margin-bottom: 20px;
}
.full-reg:hover{
  color:#84CD8B;
  border-bottom: 2px solid #84CD8B;
}
.active{
  color:#84CD8B;
  border-bottom: 2px solid #84CD8B;
}
</style>
