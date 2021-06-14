
require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

// Router import
import {routes} from './routes';

window.Vue = require('vue').default;

// Import User Class
import User from "./Helpers/User";
window.User = User;

const router = new VueRouter({
    routes,
    mode: 'history'
});

const app = new Vue({
    el: '#app',
    router
});
