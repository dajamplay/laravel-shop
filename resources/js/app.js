import { createApp } from "vue";
import App from './src/App.vue';
import router from "./src/router/router.js";

createApp(App)
    .use(router)
    .mount('#app');
