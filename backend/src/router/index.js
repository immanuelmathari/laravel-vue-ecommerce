import { createRouter, createWebHistory } from "vue-router"
import Dashboard from "@/views/Dashboard.vue";
import Login from "@/views/Login.vue";
import ResetPassword from "@/views/ResetPassword.vue";
import ResettPassword from "@/views/ResettPassword.vue";

const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/request-password',
        name: 'request-password',
        component: ResetPassword
    },
    {
        path: '/reset-password/token',
        name: 'resett-password',
        component: ResettPassword
    },
];

const router = createRouter({
    history: createWebHistory(), // what web history does is that it defines history mode as true and we will have normal urls and not hashes eg domain.com/users not #/users
    routes
})

export default router;