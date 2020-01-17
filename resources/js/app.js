// require('./bootstrap');

import './bootstrap';
import App from './App';
import Vue from 'vue';
import Routes from './routes.js';


const app = new Vue({
    el: '#app',
    routes : Routes,
    components: { App },
    template: '<App/>'
});

