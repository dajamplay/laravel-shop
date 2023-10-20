<template>
    <div class="container-fluid">
        <div class="header">
            <div class="header-left">
                <Logo />
                <Menu />
            </div>
            <div class="header-right">
                <Search />
                <div class="header-right-block">
                    <Auth />
                    <Favorite />
                    <Cart />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Menu from "./Menu.vue";
import Logo from "./Logo.vue";
import Search from "./Search.vue";
import Auth from "./Auth.vue";
import Favorite from "./Favorite.vue";
import Cart from "./Cart.vue";

export default {
    name: "Header",
    components: {Cart, Favorite, Auth, Search, Logo, Menu},
    mounted() {},
    data() {
        return {
            headerMenuList: [
                { value: 'Home', routeName: 'index'},
                { value: 'About', routeName: 'about'},
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
.header {
    background-color: $color-black;
    height: 115px;
    display: flex;
    align-items: stretch;
    justify-content: space-between;
    font-family: 'Oswald-SemiBold', sans-serif;
    font-size: 14px;
    &-left {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 50%;
    }
    &-right {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 50%;
        &-block {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    }
}
</style>
