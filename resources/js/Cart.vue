<template>
    <h2>Кол-во товаров: {{ count }}</h2>
</template>

<script>
export default {
    name: "Cart",
    data() {
        return {
            count: 0
        }
    },
    methods: {
        changeCount() {
            this.count++
        }
    }
}
</script>

<style scoped>

</style>
