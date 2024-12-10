import { createRouter, createWebHistory } from "vue-router";
import dairyList from "./components/DiaryList.vue"

const routes = [
    {
        path: "/",
        component: dairyList,
        name: "dairyList"
    },
]

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: routes
})

export default router