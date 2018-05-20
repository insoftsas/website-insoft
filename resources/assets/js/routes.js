import Index from './components/Index.vue';

const routes = [
    { path: '/', component: Index },
    { path: '*', redirect: '/' }
];

export default routes;