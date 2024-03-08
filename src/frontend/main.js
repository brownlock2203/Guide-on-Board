import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import '@/admin/utils/cdn-tailwind'
const app = createApp(App);
app.use(router);
app.mount("#gob-frontend-app");
