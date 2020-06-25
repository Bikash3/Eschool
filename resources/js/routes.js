import Route from './components/route.vue';
import login from './components/loginComponent.vue';

export const routes = [
    { path: '/route', component: Route, name: 'route' },
    { path: '/login', component: login},
];