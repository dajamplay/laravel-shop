import { createApp } from "vue";
import App from './src/App.vue';
import router from "./src/router/router.js";
import './src/assets/scss/index.scss';

createApp(App)
    .use(router)
    .mount('#app');
