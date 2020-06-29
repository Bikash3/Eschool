import Vue from 'vue';
import VueRouter from 'vue-router';
import { routes } from './routes';
Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes
});

// Vue.component('login', require('./components/loginComponent.vue').default);
// Vue.component('dashboard', require('./components/dashboardComponent.vue').default);
Vue.component('dash-nav', require('./components/dashboard/dashboardNavManu.vue').default);
Vue.component('dash-head', require('./components/dashboard/dashboardHeader.vue').default);
Vue.component('dash-foot', require('./components/dashboard/dashboardFooter.vue').default);

new Vue({
  el: '#eschoolapp',
  router
});