<template>
  <div class="col-3 mt-3 ">
    <div class="card">
      <img src="https://avatars.mds.yandex.net/get-pdb/2847873/743f98ba-cb0c-4e50-87f5-ba1db91212e0/s1200" class="card-img-top" alt="img">
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
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Card'
}
</script>

<style scoped>
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
