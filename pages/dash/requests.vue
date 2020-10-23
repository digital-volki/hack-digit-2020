<template>
  <div class="nameRequests w-100">
    <h1>Мои заявки (3)</h1>
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
        { Мероприятия: 40, 'Дата проведения': 'Dickerson', Статус: 'Macdonald', 'Тип мероприятия': 'dddd', Удалить: 'vcvc', status: 'awesome' },
        { Мероприятия: 21, 'Дата проведения': 'Larsen', Статус: 'Shaw', 'Тип мероприятия': 'dfdfd', Удалить: 'cvcvc', status: 'not_a' },
        { Мероприятия: 89, 'Дата проведения': 'Geneva', Статус: 'Wilson', 'Тип мероприятия': 'dddd', Удалить: 'vcvc', status: 'awesome' },
        { Мероприятия: 89, 'Дата проведения': 'Geneva', Статус: 'Wilson', 'Тип мероприятия': 'ddddd', Удалить: 'vcvcvc', status: 'not_a' }
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
