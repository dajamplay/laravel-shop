<template>

    <Header />

    <div class="container-fluid">
        <router-view />
    </div>

    <div v-if="this.$store.getters.isAuth">
        <p>{{ user.email }}</p>
        <p>{{ user.first_name }}</p>
    </div>

</template>

<script>
import Header from "./components/Header/Header.vue";

export default {
    components: {Header},

    mounted() {
        this.$store.dispatch('getAuthUser');
    },

    computed: {
        user() {
            return this.$store.getters.isAuth
        },
    },
}

</script>

<style lang="scss">

</style>
