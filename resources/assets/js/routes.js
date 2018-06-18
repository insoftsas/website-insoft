import Index from './components/Index.vue';
import Inscription from './components/Inscription.vue';
import Evaluate from './components/Trainings/Two.vue';
import Dashboard from './components/Dashboard.vue';
import Login from './components/Auth/Login.vue';
import Tokens from './components/Tokens.vue';
import Makers from './components/Makers.vue';
import Users from './components/Users.vue';
import Groups from './components/Groups.vue';
import Enterprises from './components/Enterprises.vue';
import ObjectShow from './components/ObjectShow.vue';
import E404 from './components/E404.vue';

const routes = [
    { path: '/', component: Index , name: 'Index'},
    { path: '/inscription', component: Inscription, name: 'Inscription' },
    { path: '/evaluate', component: Evaluate, name: 'Evaluate' },
    { path: '/login', component: Login, name: 'Login' },
    { path: '/dashboard', component: Dashboard, name: 'Dashboard' },
    { path: '/tokens', component: Tokens, name: 'Tokens' },
    { path: '/makers', component: Makers, name: 'Makers' },
    { path: '/groups', component: Groups, name: 'Groups' },
    { path: '/users', component: Users, name: 'Users' },
    { path: '/enterprises', component: Enterprises, name: 'Enterprises' },
    { path: '/:type/:id', component: ObjectShow, name: 'Object.Show' },
    { path: '*', component: E404 }
];

export default routes;
