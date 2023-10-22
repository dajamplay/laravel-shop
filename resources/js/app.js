import './bootstrap';
import { createApp } from "vue";
import App from './src/App.vue';
import router from "./src/router/router.js";
import vuex from "./src/store/index.js";

createApp(App)
    .use(vuex)
    .use(router)
    .mount('#app');
