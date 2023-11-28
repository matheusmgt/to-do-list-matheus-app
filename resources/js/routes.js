import {
    createWebHashHistory,
    createRouter
} from "vue-router";


const routes = [
    { path: '/', component: import('./pages/TodoIndex.vue') }
]

export const router = createRouter({
    history: createWebHashHistory(),
    routes,
})
