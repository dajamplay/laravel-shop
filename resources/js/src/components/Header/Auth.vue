<template>
    <div class="auth">
        <div class="auth__login">
            <a href="#">Sign in</a>
        </div>
        <div class="auth__registration">
            <a href="#">CREATE AN ACCOUNT</a>
        </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
.auth {
    display: flex;
    text-transform: uppercase;
    &__login {
        padding: 0 6px;
        a {
            &:hover {
                color: $color-main2
            }
        }
    }
    &__registration {
        padding: 0 6px;
        a {
            &:hover {
                color: $color-main2
            }
        }
    }
}
</style>
