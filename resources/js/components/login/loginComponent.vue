<template>
  <div class="login-body">
    <span :class="{ err: wrongpass, 'err-em': wrongemail  }">{{error}}</span>
    <div class="container">
      <div class="row align-items-center">
        <LoginNotice></LoginNotice>
        <LoginForm 
          :data-csrf="crsf"
          @error="setMessage"
        >
        </LoginForm>
      </div>
    </div>
  </div>
</template>

<script>
import LoginNotice from './loginNotice.vue'
import LoginForm from './loginForm.vue'

export default {
  props: ['dataCrsf'],
  data() {
    return {
      crsf: this.dataCrsf,
      error: null,
      wrongpass: true,
      wrongemail: true
    }
  },
  components: {
    LoginNotice,
    LoginForm
  },
  methods: {
    setMessage(msg) {
      this.error = msg.errormsg;
    }
  },
  mounted: function() {
    this.$store.commit('addcsfc', this.crsf)
   }
}
</script>
<style>
.login-body {
  font-family: Lato, sans-serif;
  font-weight: 300;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  justify-content: space-around;
  -webkit-box-align: center;
          align-items: center;
 background: url(/images/bg.jpg) no-repeat;
    background-size: cover;
    height: 100vh;
  }
  .err {
    display: block;
    top: calc(58% + 16.5vh);
    position: absolute;
    left: 6.5vh;
  }
  .err-em {
    position: absolute;
    left: 6.5vh;
    top: 56%;
    color: #ff0101;
  }
</style>