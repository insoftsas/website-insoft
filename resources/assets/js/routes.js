import Index from './components/Index.vue';
import E404 from './components/E404.vue';
const routes = [
    { path: '/', component: Index },
    { path: '*', component: E404 }
];

export default routes;