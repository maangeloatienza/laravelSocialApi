<template>
    <div id="main">
        <Navbar></Navbar>
        <router-view></router-view>
        <Login></Login>
    </div>
</template>


<script>

import Login from './components/loginForm';
import Navbar from './components/navbar';
import Post from './views/postview';

export default {
    components : {
        Login,
        Post,
        Navbar
    }
}

</script>


<style >
    .comment{
        display: block;
        list-style: none;
    }

</style>
