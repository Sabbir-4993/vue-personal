require('./bootstrap');

window.Vue = require('vue');

import Vue from "vue";
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {routes} from "./routes";

// Vue.component('index-component', require('./components/public/index').default);


const router = new VueRouter({
    routes, // short for `routes: routes`
    mode: 'history',
    hashbang: false,
    history: true,
    linkActiveClass: "active",
    root:  '/'
})


const app = new Vue({
    el: '#app',
    router
});
