<template>
    <button @click.prevent="send">Добавить в корзину</button>
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
