<template>
    <div class="container-fluid">
        <div class="header">
            <div class="header-left">
                <div class="header-left__logo">
                    Crisp
                </div>
                <div class="header-left__nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Sale</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-right">
                <div class="header-right__search">
                    Search
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
        width: 50%;
        &__logo {
            color: #fff;
            font-size: 15px;
            text-transform: uppercase;
            margin-left: 27px;
            padding: 5px 9px;
            border: 2px solid #fff;
            height: 38px;
        }
        &__nav {
            ul {
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 60px;
                li {
                    padding: 0 15px;
                    text-transform: uppercase;
                    a {
                        position: relative;
                        color: #fff;
                        text-decoration: none;
                        &:after {
                            content: '';
                            position: absolute;
                            left: 0; bottom: -9px;
                            width: 100%;
                            height: 2px;
                            background-color: #EB5757;
                        }
                        &:hover {

                        }
                    }
                }
            }
        }
    }
    &-right {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: green;
        width: 50%;
        &__search {
            padding: 0;
        }
        &-block {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: orange;
        }
    }
}

</style>
