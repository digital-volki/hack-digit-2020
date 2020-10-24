<template>
  <div class="formRSb p-0 m-0">
    <b-button-group vertical>
      ⠀<div v-for="(item, index) in listThemes" :key="index">
        <b-button class="btn1 btn">
          {{ item.name }}
        </b-button>
        <b-button
          v-for="(itemSub, indexSub) in item.sub"
          :key="indexSub"
          class="btn1 btn"
        >
          {{ itemSub.name }}
        </b-button>
      </div>
    </b-button-group>
  </div>
</template>
<script>
export default {
  name: 'RightSideBar',
  data () {
    return {
      itemActive: 'teo_fin',
      listThemes: [{
        name: 'Теория “Финансовая',
        id: 'teo_fin',
        sub: [{
          name: 'Тест “Финансовая',
          id: 'test_fin'
        }]
      }]
    }
  },
  methods: {
  }
}

</script>
<style scoped>
  .formRSb{
    width: 100%;
    height: 100%;
    background: #FFFFFF;
    margin-left: auto;
    margin-right: 0;
    box-shadow: -4px 0px 16px rgba(33, 37, 41, 0.05);
  }
  .departmentList{
    background: #FFFFFF;
    border: 0;
    outline: none;
  }
  .btn1{
    background: #fff;
    border: 0;
    color: #212529;
    outline: none;
    width: 200px;
    text-align: left;
    padding-left: 25px;
    font-style: normal;
    font-size: 20px;
  }
  .active{
    color: #FFFFFF !important;
    background: green !important;
  }
</style>
