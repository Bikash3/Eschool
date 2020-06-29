<template>
  <div>
      <h1>{{name}}</h1>
      <router-link to="/login"><a>Back to the root</a></router-link>
  </div>
</template>

<script>
export default {
    data() {
        return {
            name: 'Raute'
        }
    }
}
</script>

<style>

</style>