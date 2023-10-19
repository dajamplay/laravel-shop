<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand">Super History</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item" v-for="(item, index) in headerMenuList" :key="index">
                        <router-link :to="{name: item.routeName}" class="nav-link" aria-current="page">
                            {{ item.value }}
                        </router-link>
                    </li>

                </ul>
                <div>
                    Register|Login
                </div>
            </div>
        </div>
    </nav>
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

<style scoped>

</style>
