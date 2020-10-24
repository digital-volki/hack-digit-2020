<template>
  <div class="container-xl">
    <label class="MyCourses">Мои курсы</label> ><input type="text" class="imptNameCourseUpper" value="Александр Сокирка. Курс Node js." readonly>
    <input type="text" class="imptNameCourse" value="Александр Сокирка. Node Auth JWT." readonly>
    <!--    вставка видео -->
    <div class="videoCourse">
      <b-embed
        type="iframe"
        aspect="16by9"
        src="https://www.youtube.com/embed/SnoAwLP1a-0"
        allowfullscreen
      />
    </div>

    <b-container class="bv-example-row">
      <b-row align-h="between">
        <b-col cols="4" />
        <b-col cols="4" class="Next">
          <nuxt-link to="/dash/courseTest">
            <b-button class="btnNext" variant="success">
              Следующий шаг >
            </b-button>
          </nuxt-link>
        </b-col>
      </b-row>
    </b-container>
    <Comments />
  </div>
</template>

<script>

import Comments from '../../components/dash/Comments'
export default {
  name: 'CourseDetails',
  components: { Comments },
  layout: 'DashCourse'
}
</script>

<style scoped>
  .imptNameCourse{
    outline: none;
    border: none;
    width: 1000px;
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
  .videoCourse{
    margin-top: 30px;
    width: 1100px;
    height: 554px;
  }
  .bv-example-row{
    margin-top: 100px;
    margin-right: auto;
  }
  .Next{
    text-align: right;
    width: 117px;
    height: 42px;
    font-style: normal;
    font-weight: normal;
    line-height: 24px;

    color: #FFFFFF;
  }
  .btnNext{
    font-size: 16px;
    background: #84CD8B;
    outline: none;
    border: none;
  }
</style>
