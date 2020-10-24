<template>
  <div class="mt-3 m-0 text-dark">
    <div class="card">
      <img src="/img/Rectangle%203.jpg" class="card-img-top" alt="img">
      <div class="card-body">
        <h5 class="card-title">
          <button class="btn btn-primary rounded-pill">
            Сторонние
          </button>
          <button class="btn btn-success rounded-pill">
            Сторонние
          </button>
          <br>
          Название карточки
        </h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up the bulk of the card's content.
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
