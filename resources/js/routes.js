import VueRouter from "vue-router";

//Componentes
import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Contact from "./pages/Contact.vue";
import Login from "./pages/Login.vue";
import Register from "./pages/Register.vue";

const routes = [
    {
        path: "/",
        component: Home,
        name: "home",
        meta:{
            title:'Home'
        }
    },
    {
        path: "/about",
        component: About,
        name: "about",
        meta:{
            title:'About'
        }
    },
    {
        path: "/contact",
        component: Contact,
        name: "contact",
        meta:{
            title:'Contact'
        }
    },
    {
        path: "/login",
        component: Login,
        name: "login",
        meta:{
            title:'Login'
        }
    },
    {
        path: "/register",
        component: Register,
        name: "register",
        meta:{
            title:'Register'
        }
    }
];

const router = new VueRouter({
    routes
    // mode: 'history',
});

export default router;
