import './bootstrap';
import { createApp } from "vue";
import AddButton from './AddButton.vue';
import Cart from './Cart.vue';

const app = createApp({});

app.component('v-add-button', AddButton);

app.component('v-cart', Cart);

app.mount('#app');
