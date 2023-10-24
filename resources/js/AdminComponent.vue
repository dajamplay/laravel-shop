<template>
    <h2>Test</h2>
    <button @click.prevent="alert">PUSH ME</button>
</template>

<script>
export default {
    methods: {
        alert() {
            console.log('ALEEEEERT')
        }
    }
}
</script>

<style scoped>

</style>
