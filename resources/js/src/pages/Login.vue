<template>
    <form>
        <div v-if="errors?.email" class="error animate__animated animate__zoomIn">{{ errors.email[0] }}</div>
        <label v-else>&nbsp;</label>
        <input v-model="email" type="email" name="email" placeholder="Введите почту">
        <div v-if="errors?.password" class="error animate__animated animate__zoomIn">{{ errors.password[0] }}</div>
        <label v-else>&nbsp;</label>
        <input v-model="password" type="password" name="password" placeholder="Введите пароль">
        <button @click.prevent="login" type="submit">Вход</button>
    </form>
</template>

<script>
export default {
    name: "Login",

    data() {
        return {
            email: '',
            password: '',
            errors: [],
        }
    },

    methods: {
        login() {
            axios.get('/sanctum/csrf-cookie')
                .then(response => {
                axios.post('/api/v1/login', {
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
