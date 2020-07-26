import Vue from 'vue';
import VueRouter from 'vue-router';

import {routes} from './routes';
import {filters} from './filter';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});

Vue.component('dash-nav', require('./components/dashboard/dashboardNavManu.vue').default);
Vue.component('dash-head', require('./components/dashboard/dashboardHeader.vue').default);
Vue.component('dash-foot', require('./components/dashboard/dashboardFooter.vue').default);

new Vue({
  el: '#eschoolapp',
  router,
  filters
});