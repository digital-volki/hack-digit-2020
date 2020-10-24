<template>
  <div>
    <h4>Оповещения (3)</h4>
    <table class="table table-striped">
      <tbody>
        <tr>
          <td>
            <div class="nameAlert">
              <h1><img src="/img/dobro.svg" alt="logo"> DOBRO.RU</h1>
            </div>
          </td>
          <td class="d-flex">
            <nuxt-link class="btnAlertProryv" to="/dash/dobro">
              <div class="discriptionAlert">
                <h2>Еженедельный дайджест новостей <span>  Стартовало народное голосование за лучшие проекты...</span></h2>
              </div>
            </nuxt-link>
          </td>
          <td>
            <button class="btnClose">
              <Close />
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <div class="nameAlert">
              <h1> <img src="/img/proryv.svg" alt="logo"> Цифровой прорыв</h1>
            </div>
          </td>
          <td>
            <nuxt-link class="btnAlertProryv" to="/dash/proryv">
              <div class="discriptionAlert">
                <h2>   Хочешь победить в Цифровом прорыве?<span> Прокачай навыки презентации проекта! В рамках...</span></h2>
              </div>
            </nuxt-link>
          </td>
          <td>
            <button class="btnClose">
              <Close />
            </button>
          </td>
        </tr>
        <tr>
          <td>
            <div class="nameAlert">
              <h1><img src="/img/dobro.svg" alt="logo"> DOBRO.RU</h1>
            </div>
          </td>
          <td class="d-flex">
            <nuxt-link class="btnAlertProryv" to="/dash/dobro">
              <div class="discriptionAlert">
                <h2>Еженедельный дайджест новостей <span>  Стартовало народное голосование за лучшие проекты...</span></h2>
              </div>
            </nuxt-link>
          </td>
          <td>
            <button class="btnClose">
              <Close />
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  name: 'Alerts',
  layout: 'dash'
}
</script>

<style scoped>
  .tableRequest{
    width: 1100px;
    font-size: 16px;
  }
  .discriptionAlert{
    width: 800px;
  }
  .nameAlert{
    width: 190px;
  }
  .table{
    width: 1000px;
    margin-top: 40px;
  }
  h1{
    font-weight: 500;
    font-size: 18px;
    width: 400px;
  }
  h2{
    font-weight: 500;
    font-size: 16px;
    color: #212529;
    width: 700px;
    margin-top: 5px;
    margin-left: 25px;
  }
  span{
    font-size: 16px;
    color: #4c4f53;
    font-weight: 200;
  }
  h4{
    font-size: 24px;
  }
  .btnAlertProryv{
    border: none;
    background: none;
    outline: none;
  }

</style>
