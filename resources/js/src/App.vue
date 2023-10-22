<template>

    <Header />

    <div class="container-fluid">
        <router-view />
    </div>

    <div v-if="user">
        <p>{{ user.email }}</p>
        <p>{{ user.first_name }}</p>
    </div>

</template>

<script>
import Header from "./components/Header/Header.vue";

export default {
    components: {Header},

    mounted() {
        this.$store.dispatch('getUser', 1);
        this.$store.dispatch('getUsers');
    },
    computed: {
        user() {
            return this.$store.getters.user
        },
        users() {
            return this.$store.getters.users
        },
    }
}

</script>

<style lang="scss">

</style>
