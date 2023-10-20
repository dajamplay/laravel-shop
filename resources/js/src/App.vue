<template>

    <Header />

    <div class="container-fluid">
        <router-view />
    </div>


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
