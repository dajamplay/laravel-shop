<template>
    <h2>Test</h2>
    <button @click.prevent="send">PUSH ME</button>
    <slot></slot>
</template>

<script>
export default {
    methods: {
        send() {
            console.log('test')
        }
    }
}
</script>

<style scoped>

</style>
