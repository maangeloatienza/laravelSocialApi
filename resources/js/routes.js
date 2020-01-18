import Vue from 'vue';
import VueRouter from 'vue-router';

import ContentBody from './components/body/Body';

Vue.use(VueRouter);

export default new VueRouter({
    mode : 'history',
    routes : [
        {
            path : '/',
            component : ContentBody
        }
    ]
});
