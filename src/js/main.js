require("./bootstrap");
import "bootstrap/dist/css/bootstrap.min.css"

import { createApp } from 'vue'
import App from './App'
import router from './router'
import VueGoodTablePlugin from 'vue-good-table-next';

import 'vue-good-table-next/dist/vue-good-table-next.css'
import '@fortawesome/fontawesome-free/js/all'

const app = createApp(App)

app.use(router)
app.use(VueGoodTablePlugin)
app.mount('#app')

import "bootstrap/dist/js/bootstrap.js"