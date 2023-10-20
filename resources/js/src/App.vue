<template>

    <Header />

    <router-view />

</template>

<script>
import Header from "./components/Header/Header.vue";

export default {
    components: {Header},
    setup() {
        return {
            username: 'First Name'
        };
    },
    methods: {

    }
}

</script>

<style lang="scss">

</style>
