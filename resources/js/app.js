// require('./bootstrap');

import './bootstrap';
import App from './App';
import Vue from 'vue';
import Routes from './routes';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import axios from 'axios';

Vue.use(VueRouter);
Vue.use(VueResource);

Vue.http.options.root = 'http://localhost:8000/api/v1/';

axios.defaults.baseURL = 'http://localhost:8000/api/v1/';
axios.defaults.headers.common['Authorization'] = `bearer ${localStorage.token}`;
axios.defaults.headers.post['Content-Type'] = 'application/json';

const router = new VueRouter({
    routes: Routes,
    mode: 'history'
})

const app = new Vue({
    el: '#app',
    router : router,
    render: h => h(App)
});

