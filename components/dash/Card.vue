<template>
  <div class="mt-3 m-0 text-dark">
    <div class="card">
      <img :src="`/ex/Content/Image-${model.img_link}.png`" class="card-img-top" alt="img">
      <div class="card-body">
        <h5 class="card-title">
          <button v-for="(item, index) in model.tags" :key="index" class="btn btn-primary rounded-pill">
            {{ item }}
          </button>
          <br>
          <br>
          {{ model.name }}
        </h5>
        <p class="card-text">
          {{ model.desc }}
        </p>
        <a href="#" class="btn btn-success">Подробнее</a>
        <a href="#" class="btn btn-outline-success" :class="[isAdminPanel ? '': 'd-none']">Изменить</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Card',
  props: {
    panel: {
      type: Boolean,
      default: false
    },
    // eslint-disable-next-line vue/require-default-prop
    model: {
      type: Object
    }
  },
  data () {
    return {
      isAdminPanel: this.panel
    }
  }
}
</script>

<style scoped>
.card-title{
  text-decoration: none !important;
}
h5>.btn{
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 12px;
}
.card-title{
  font-style: normal;
  font-weight: 500;
  font-size: 20px;
  line-height: 24px;
}
.card-text{
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 24px;
}
</style>
