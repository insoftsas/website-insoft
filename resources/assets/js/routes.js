import Index from './components/Index.vue';
import Dashboard from './components/Dashboard.vue';
import Login from './components/Auth/Login.vue';
import E404 from './components/E404.vue';

const routes = [
    { path: '/', component: Index , name: 'Index'},
    { path: '/login', component: Login, name: 'Login' },
    { path: '/dashboard', component: Dashboard, name: 'Dashboard' },
    { path: '*', component: E404 }
];

export default routes;