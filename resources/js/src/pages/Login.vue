<template>
    <form>
        <div v-if="errors.email" class="error">{{ errors.email[0] }}</div>
        <input v-model="email" type="email">
        <div v-if="errors.password" class="error">{{ errors.password[0] }}</div>
        <input v-model="password" type="password">
        <button @click.prevent="login" type="submit">Вход</button>
    </form>
</template>

<script>
export default {
    name: "Login",

    data() {
        return {
            email: null,
            password: null,
            errors: [],
        }
    },

    methods: {
        login() {
            axios.get('/sanctum/csrf-cookie')
                .then(response => {
                axios.post('/login', {
                    email: this.email,
                    password: this.password,
                }).then( response => {
                    this.$store.dispatch('getAuthUser');
                    this.$router.push({ path: '/' });
                }).catch(error => {
                    this.errors = error.response.data.errors;
                });
            });
        },

    }
}
</script>

<style scoped>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .error {
        color: red;
    }
</style>
