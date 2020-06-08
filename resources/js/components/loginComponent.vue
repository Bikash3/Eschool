<template>
  <div class="login-body">
     
    <div class="container">
      <div class="row align-items-center">
        <login-notice></login-notice>
        <login-form><slot></slot></login-form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  /*data() {
    return {
      placeholder:'',
      name: 'dabo',
      email: '',
      password: '',
      errorMassageBox: true,
      errorMassage: "Please Enter login details !!",
    }
  },
  methods: {
    csrf() {
      return this.$attrs['data-csrf'];
    },
    formsubmit() {
      this.errorMassageBox = false;
      if (this.email == '') {
        this.errorMassageBox = true;
        this.errorMassage = "Please Enter Email!!";
        return false;
      }
      if (this.password == '') {
        this.errorMassageBox = true;
        this.errorMassage = "Please Enter password!!";
        return false;
      }
    }
  }*/
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