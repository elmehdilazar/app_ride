import './assets/main.css';
import '@/assets/js/jquery-3.1.1.js';
import '@/assets/js/owl.carousel.js';
import '@/assets/js/legacy'
import '@/assets/js/settings';
import '@/assets/js/uber-google-maps';

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(router)

app.mount('#app')
