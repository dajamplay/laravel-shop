<template>
    <div class="container-fluid">
        <div class="header">
            <div class="header-left">
                <div class="header-left__logo">
                    logo
                </div>
                <div class="header-left__nav">
                    nav
                </div>
            </div>
            <div class="header-right">
                <div class="header-right__search">
                    search
                </div>
                <div class="header-right-block">
                    <div class="header-right-block__auth">
                        auth
                    </div>
                    <div class="header-right-block__favorite">
                        favorite
                    </div>
                    <div class="header-right-block__cart">
                        cart
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <nav class="navbar navbar-expand-lg bg-body-tertiary">-->
<!--        <div class="container">-->
<!--            <div class="navbar-brand">Super History</div>-->
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"-->
<!--                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"-->
<!--                    aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--            <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--                <ul class="navbar-nav me-auto mb-2 mb-lg-0">-->

<!--                    <li class="nav-item" v-for="(item, index) in headerMenuList" :key="index">-->
<!--                        <router-link :to="{name: item.routeName}" class="nav-link" aria-current="page">-->
<!--                            {{ item.value }}-->
<!--                        </router-link>-->
<!--                    </li>-->

<!--                </ul>-->
<!--                <div>-->
<!--                    Register|Login-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
</template>

<script>
export default {
    name: "Header",
    mounted() {

    },
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
    background-color: #000;
    height: 60px;
    display: flex;
    align-items: stretch;
    justify-content: space-between;
    &-left {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: gold;
        width: 50%;
    }
    &-right {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: green;
        width: 50%;
        &-block {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: orange;
        }
    }
}

</style>
