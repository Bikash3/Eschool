<template>
  <div class="login-body">
     
    <div class="container">
      <div class="row align-items-center">
        <LoginNotice></LoginNotice>
        <LoginForm><slot></slot></LoginForm>
      </div>
    </div>
  </div>
</template>

<script>
import LoginNotice from './login/loginNotice.vue'
import LoginForm from './login/loginForm.vue'

export default {
  data() {
    return {
      
    }
  },
  methods: {
    
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