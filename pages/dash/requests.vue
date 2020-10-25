<template>
  <div class="nameRequests w-100">
    <h1>Офлайн мероприятия (3)</h1>
    <div class="tableRequest mt-4 container-xl">
      <div>
        <b-table
          id="table-transition-example"
          :tbody-transition-props="transProps"
          striped
          primary-key="a"
          :items="items"
          :fields="fields"
          :tbody-tr-class="rowClass"
        >
          <template #cell(Удалить)>
            <button class="btnClose">
              <Close />
            </button>
          </template>
        </b-table>
      </div>
    </div>
  </div>
</template>

<script>

import Close from '@/components/icons/Close'

export default {
  name: 'Requests',
  comments: {
    Close
  },
  layout: 'dash',
  data () {
    return {
      transProps: {
        // Transition name
        name: 'flip-list'
      },
      fields: [
        { key: 'Мероприятия', stickyColumn: false, isRowHeader: false, variant: 'success' },
        { key: 'Дата проведения', stickyColumn: false, isRowHeader: false, variant: 'success' },
        { key: 'Статус', stickyColumn: false, isRowHeader: false, variant: 'success' },
        { key: 'Тип мероприятия', stickyColumn: false, isRowHeader: false, variant: 'success' },
        { key: 'Удалить', stickyColumn: false, isRowHeader: false, variant: 'success' }
      ],
      items: [
        { Мероприятия: 'Secaton 2018', 'Дата проведения': '28.11.2019 - 29.11.2019', Статус: 'На рассмотрении', 'Тип мероприятия': 'Грантовая поддержка', Удалить: 'vcvc', status: 'awesome' },
        { Мероприятия: 'Будь в курсе', 'Дата проведения': '04.08.2020 - 07.09.2020', Статус: 'Подтверждено', 'Тип мероприятия': 'В федеральном округе', Удалить: 'vcvc', status: 'not_a' },
        { Мероприятия: 'Здоровые дети', 'Дата проведения': '08.08.2020 - 16.10.2020', Статус: 'На рассмотрении', 'Тип мероприятия': 'Всероссийское ', Удалить: 'vcvc', status: 'awesome' }
      ]
    }
  },
  methods: {
    rowClass (item, type) {
      if (!item || type !== 'row') { return }
      if (item.status === 'awesome') { return 'table-light' }
      if (item.status === 'not_a') { return 'table-secondary' }
    }
  }
}
</script>

<style>
  th>* {
    color: #f7f8fb !important;
  }
  .table#table-transition-example .flip-list-move {
    transition: transform 1s;
  }
  .thead-re >th {
      color: #000;
      background-color: #000;
      border-color: #000;
  }
  .nameRequests {
    width: 269px;
    height: 46px;
    left: 405px;
    top: 56px;

    font-family: SF Pro Display;
    font-style: normal;
    font-weight: 300;
    font-size: 42px;
    line-height: 46px;
  }
  .tableRequest{
    /*width: 1200px;*/
    font-size: 24px;
    margin-left: -16px;
    margin-right: auto;
  }
  .btnClose{
    border: none;
    background: none;
  }
</style>
