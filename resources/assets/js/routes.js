import Index from './components/Index.vue';
import Dashboard from './components/Dashboard.vue';
import Login from './components/Auth/Login.vue';
import Tokens from './components/Tokens.vue';
import Makers from './components/Makers.vue';
import Groups from './components/Groups.vue';
import Enterprises from './components/Enterprises.vue';
import E404 from './components/E404.vue';

const routes = [
    { path: '/', component: Index , name: 'Index'},
    { path: '/login', component: Login, name: 'Login' },
    { path: '/dashboard', component: Dashboard, name: 'Dashboard' },
    { path: '/tokens', component: Tokens, name: 'Tokens' },
    { path: '/makers', component: Makers, name: 'Makers' },
    { path: '/groups', component: Groups, name: 'Groups' },
    { path: '/enterprises', component: Enterprises, name: 'Enterprises' },
    { path: '*', component: E404 }
];

export default routes;