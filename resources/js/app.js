import {routes} from "./routes.js";

require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// Vue.component('front-page', require('./components/Home.vue'));


const router = new VueRouter({
    routes, // short for `routes: routes`
})

//id app
const app = new Vue({
    el: '#app',
    router
});
