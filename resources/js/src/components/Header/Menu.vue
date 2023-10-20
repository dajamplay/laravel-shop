<template>
    <div class="nav">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Sale</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
.nav {
    ul {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 60px;

        li {

            text-transform: uppercase;

            a {
                position: relative;
                color: #fff;
                text-decoration: none;
                padding: 0 14px;

                &:after {
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: -8px;
                    width: 0;
                    height: 2px;
                    background-color: $color-main2;
                }

                &:hover {
                    &:after {
                        width: 100%;
                    }
                }
            }
        }
    }
}
</style>
