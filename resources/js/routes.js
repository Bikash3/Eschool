import Route from './components/route.vue';
import Login from './components/loginComponent.vue';
import Dashboard from './components/dashboardComponent.vue';

export const routes = [
    { path: '/vue', component: Route, name: 'route' },
    { path: '/login', component: Login, name: 'login'},
    { path: '/dashboard/:post/:id', component: Dashboard, name: 'dashboard'},
];