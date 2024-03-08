import { createApp } from "vue";

import App from "./App.vue";

import router from "./router";

import '@/admin/utils/cdn-tailwind';

import menuFix from "./utils/admin-menu-fix";

const app = createApp(App);

app.use(router);

app.mount("#gob-admin-app");
    
menuFix("gob");