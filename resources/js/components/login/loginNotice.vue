<template>
    <aside class="meta">
        <h1>{{heading}}</h1>
        <p v-html="para1"></p>
        <p v-html="para2"></p>
        <p>{{para3}}</p>
    </aside>
</template>

<script>
export default {
    data() {
        return {
            heading: 'Lorem ipsum dolor sit amet',
            para1: 'Lorem ipsum dolor sit amet<br />Lorem ipsum dolor sit amet <a href="#">Lorem ipsum dolor sit amet</a>',
            para2: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque libero in viverra feugiat. <strong>Login</strong> to see the effect.',
            para3: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        }
    }
}
</script>

<style scoped>

</style>