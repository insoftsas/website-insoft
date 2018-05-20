import Main from './components/App.vue';

const routes = [
    { path: '/', component: Main },
    { path: '*', redirect: '/' },
];

export default routes;