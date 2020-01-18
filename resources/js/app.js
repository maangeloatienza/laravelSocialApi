// require('./bootstrap');

import './bootstrap';
import App from './App';
import Vue from 'vue';
import Routes from './routes.js';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    routes : Routes,
    render: h => h(App)
});

