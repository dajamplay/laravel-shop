<template>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <router-link to="/"><img src="/assets/img/logo.png" alt="Елеанта"></router-link>
                </div>
                <nav class="header__nav">
                    <div class="menu_toggle">
                        <div class="menu_toggle_line"></div>
                    </div>
                    <div class="header_menu">
                        <ul>

                            <li class="link_home"><router-link to="/">Главная</router-link></li>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Продукция</a></li>
                            <li class="categories__menu">
                                <ul>
                                    <li><a href="#">Rosa Graf</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Оплата и доставка</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="header__auth">
                    <div>+7(911)744-78-88</div>
                    <div>+7(911)940-66-95</div>
                    <div v-if="!this.$store.getters.isAuth"><router-link to="/user-login">Login</router-link></div>
                    <div v-else><button @click="logout">Logout</button></div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>

export default {
    name: "Header",
    components: {},
    mounted() {

    },
    methods: {
        logout() {
            axios.get('/sanctum/csrf-cookie')
                .then(response => {
                    axios.post('/api/v1/logout').then( response => {
                        console.log(response)
                        this.$store.dispatch('getAuthUser');
                        this.$router.push({ path: '/' })
                    }).catch(error => {
                        console.log(error);
                    });
                });
        },
    }
}
</script>

<style lang="scss" scoped>

</style>
