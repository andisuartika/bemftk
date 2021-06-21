import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";

import App from "./layout/Mahasiswa.vue";

import router from "./router";

import VueRouter from "vue-router";
import swal from "sweetalert";

createApp(App).use(router).mount("#app");
