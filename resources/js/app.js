import './bootstrap';
import { createApp } from "vue";
import AdminComponent from "./AdminComponent.vue";

const app = createApp({});

app.component('component-admin', AdminComponent);
app.mount('#app-admin');
