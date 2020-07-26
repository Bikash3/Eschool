<template>
  <div class="login-body">
    
    <div v-if="errorMassage">{{errorMassage}}</div>
    <div class="container">
      <div class="row align-items-center">
        <LoginNotice></LoginNotice>
        <LoginForm 
          :data-csrf="crsf"
        >
        </LoginForm>
      </div>
    </div>
  </div>
</template>

<script>
import LoginNotice from './login/loginNotice.vue'
import LoginForm from './login/loginForm.vue'

export default {
  props: ['dataCrsf'],
  data() {
    return {
      crsf: this.dataCrsf
    }
  },
  components: {
    LoginNotice,
    LoginForm
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
</style>