import Vue from 'vue';
import VueRouter from 'vue-router';

import {routes} from './routes';
import {filters} from './filter';
import {store} from './store';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});

Vue.component('dash-nav', require('./components/dashboard/include/dashboardNavManu.vue').default);
Vue.component('dash-head', require('./components/dashboard/include/dashboardHeader.vue').default);
Vue.component('dash-foot', require('./components/dashboard/include/dashboardFooter.vue').default);
Vue.component('dash-user-pop', require('./components/dashboard/include/dashUserPop.vue').default);

new Vue({
  el: '#eschoolapp',
  router,
  filters,
  store
});