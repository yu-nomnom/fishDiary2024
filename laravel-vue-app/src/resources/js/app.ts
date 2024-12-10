import "./bootstrap";
import { createApp } from "vue";
import { createVuetify } from 'vuetify';
import App from "./components/App.vue";
import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/dist/vuetify.min.css';

const app = createApp(App);
const vuetify = createVuetify();

app.use(vuetify);
app.mount('#app');