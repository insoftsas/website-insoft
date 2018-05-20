import Index from './components/Index.vue';
import Login from './components/Auth/Login.vue';
import E404 from './components/E404.vue';

const routes = [
    { path: '/', component: Index },
    { path: '/login', component: Login },
    { path: '*', component: E404 }
];

export default routes;