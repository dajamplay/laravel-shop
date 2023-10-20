<template>
    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__wrapper-left">

            </div>
            <div class="slider__wrapper-right">
                <img class="slider__wrapper-right__img-2" src="/assets/images/slider-2.png" alt="">
                <img class="slider__wrapper-right__img-1" src="/assets/images/slider-1.png" alt="">
            </div>
        </div>
    </div>
</template>

<script setup>

</script>

<style scoped lang="scss">
.slider {
    background: url('/assets/images/slider-bg.png');
    max-width: 1878px;
    height: 800px;
    margin: 21px;
    display: flex;
    align-items: center;
    justify-content: center;
    &__wrapper {
        height: 709px;
        max-width: 1458px;
        background-color: green;
        &-left {
            width: 50%;
        }
        &-right {
            width: 50%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            &__img-1 {
                position: absolute;
                max-width: 474px;
                max-height: 709px;
            }
            &__img-2 {
                position: absolute;
                margin-left: -616px;
                max-width: 416px;
                max-height: 623px;
            }
        }
    }
}
</style>
