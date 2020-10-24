<template>
  <div>
    <label class="MyCourses">Мои курсы</label> ><input type="text" class="imptNameCourseUpper" value="Олег Демиденко. Финансовая грамотность." readonly>
    <br>
    <input type="text" class="imptNameCourse" value="Олег Демиденко. Финансовая грамотность." readonly>
    <p>
      <button v-for="i in questions.length" :key="i" class="m-2" :class="[i-1 < answers.length ? answers[i-1] === questions[i].right ? 'btnTestnumber': 'btn-danger' : 'btn-sec']" type="button">
        {{ i }}
      </button>
    </p>
    {{ questions[answers.length].str }}
    <div :style="[ tableview?{ width: '1200px'}:{} ]">
      <div class="flchoice">
        <div class="d-flex flex-wrap makechoise">
          <button
            v-for="(item, index) in questions[answers.length].answers"
            :key="index"
            class="btn btn-success"
            square
            border
            :active="active == index"
            @click="active = index"
          >
            <i class="bx bxs-heart" /> {{ item }}
          </button>
        </div>
      </div>
      <div class="btntest">
        <vs-row>
          <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="2" />

          <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="3" />

          <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="2" />

          <vs-col vs-type="flex" vs-justify="center" vs-align="center" w="5" class="Dalee">
            <vs-button
              color="#7E72F2"
              @click="addAnswer"
            >
              <div class="GoTestBtn">
                <b-button variant="success">
                  Далее
                </b-button>
              </div>
            </vs-button>
          </vs-col>
        </vs-row>
      </div>
      <div class="whtbg" />
    </div>
  </div>
</template>

<script>
export default {
  name: 'CourseTest',
  layout: 'DashCourse',
  data: () => ({
    tableview: false,
    active: -1,
    answers: [],
    questions: [
      {
        str: 'Djgh',
        answers: ['Помогать больным людям',
          'Чинить машины',
          'Учить младшекласников',
          'Убираться',
          'Составлять таблицы, схемы вычислительных машин'],
        right: 1
      },
      {
        str: '',
        answers: ['хммм',
          'или нет',
          'долго?',
          'не думай'],
        right: 2

      },
      {
        str: '',
        answers: [
          'или нет',
          'долго?',
          'не думай'],
        right: 0

      },
      {
        str: 'Отлично! Теперь давай посмотрим то что походит тебе',
        answers: [],
        right: 0
      }
    ]
  }),
  methods: {
    addAnswer () {
      if ((this.answers.length / (this.questions.length - 1)) >= 1) {
        if (this.tableview === false) {
          this.tableview = true
        } else {
          this.$nuxt.$router.push('/dash/courseDetails')
        }
      } else {
        this.answers.push(this.active)
        this.active = null
      }
    }
  }
}
</script>

<style scoped>
  .btn-sec{
    border: none;
    border-radius: 7px;
    width: 48px;
    height: 48px;
    color: #808080;
    background: #ffffff;
  }
  .btn-danger{
    border: none;
    border-radius: 7px;
    width: 48px;
    height: 48px;
    color: #ffffff;
    background: #ff0000;
  }
  .imptNameCourse{
    outline: none;
    border: none;
    width: 1100px;
    font-weight: 300;
    font-size: 42px;
    line-height: 46px;
    margin-top: -2px;
    margin-left: -7px;
  }
  .imptNameCourseUpper{
    font-size: 14px;
    outline: none;
    border: none;
    width: 1000px;
  }
  .MyCourses{
    font-size: 14px;
    color: #2D9CDB;
    border-bottom: 1px solid #2D9CDB;
  }
  .tv {
    padding: 5px;
    margin: 25px;
    font-size: 22px;
  }
  .YesS {
    font-size: 5px;
    margin-top: 140px;
    overflow: hidden;
    width: 850px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px;
    box-shadow: 0.1px 2px 2px 1px rgba(154, 147, 140, 0.5), 1px 1px 5px rgba(255, 255, 255, 1);
  }
  .GoTest {
    padding-top: 17px;
    padding-bottom: 13px;
    width: 100%;
    color: #F5F5F5;
    font-size: 19px;
  }
  .textqv {
    margin: 10px 0px 10px 32px;
  }
  .TestImg {
    margin-left: 25%;
    margin-top: 30px;
  }
  .unknowprofession {
    text-align: center;
    font-size: 24px;
    line-height: 28px;
  }
  .btntest > * > * > * {
    font-weight: 500;
    font-size: 20px;
    line-height: 23px;
    margin-left: auto;
    margin-top: 20px;
    margin-bottom: -25px;
    margin-right: 15px;
  }
  .whtbg {
    padding-top: 23px;
    padding-bottom: 21px;
    text-align: center;
    width: 100%;
    color: #F5F5F5;
    font-size: 24px;
  }
  .progress {
    width: 773px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 15px;
    height: 4px;
  }
  .nbquest {
    font-size: 15px;
    margin-left: 38px;
    margin-top: 5px;
    color: #2C2C2C;
  }
  .flchoice {
    font-size: 50px;
    color: orangered;
    margin-left: 36px;
  }
  .GoTestBtn {
    margin: 7px 30px 7px 30px;
    padding-left: 720px;
  }
  .btnTestnumber{
    border: none;
    border-radius: 7px;
    width: 48px;
    height: 48px;
    color: white;
    background: #84CD8B;
  }
</style>
