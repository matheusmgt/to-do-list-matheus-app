import './bootstrap';
import '../css/boostrap-theme/bootstrap.min.css';
import { router } from "./routes";
import { store } from './store/store';
import { methods } from './helpers/helpers'
import { createApp } from 'vue';

const app = createApp();

app.use(router);
app.use(store);

app.mixin({methods});

app.mount('#app');

