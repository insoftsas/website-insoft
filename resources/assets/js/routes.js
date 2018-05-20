import Index from './components/Index.vue';
import Login from './components/Auth/Login.vue';

const routes = [
    { path: '/', component: Index },
    { path: '/login', component: Login },
    { path: '*', redirect: '/' }
];

export default routes;