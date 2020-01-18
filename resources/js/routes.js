

import ContentBody from './components/body/Body';
import Login from './components/forms/login/Login';

export default [
    {
        path: '/',
        component: ContentBody,

    },
    {
        path : '/login',
        name : 'login',
        component : Login
    }


];
