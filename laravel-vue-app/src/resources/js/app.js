import "./bootstrap";
import { createApp } from "vue";
import { createVuetify } from 'vuetify';
import App from "./components/App.vue";
import router from './router';
import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/dist/vuetify.min.css';

const app = createApp(App);
const vuetify = createVuetify();

app.use(vuetify);
app.use(router);
app.mount('#app');