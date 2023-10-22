<template>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <a href="/">
                        <img src="/assets/img/logo.png" alt="Елеанта">
                    </a>
                </div>
                <nav class="header__nav">
                    <div class="menu_toggle">
                        <div class="menu_toggle_line"></div>
                    </div>
                    <div class="header_menu">
                        <ul>
                            <li class="link_home"><a href="/">Главная</a></li>
                            <li><a href="/about">О компании</a></li>
                            <li><a href="/category/1">Продукция</a></li>
                            <li class="categories__menu">
                                <ul>
                                    <li><a href="#">Rosa Graf</a></li>
                                </ul>
                            </li>
                            <li><a href="/delivery">Оплата и доставка</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="header__auth">
                    <div>+7(911)744-78-88</div>
                    <div>+7(911)940-66-95</div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>

export default {
    name: "Header",
    components: {},
    mounted() {},
}
</script>

<style lang="scss" scoped>

</style>
