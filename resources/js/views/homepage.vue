<template>
    <div>
        <div>
            <Navbar></Navbar>
            <Post></Post>
            <Login></Login>
        </div>
    </div>
</template>

<script>
import Navbar from './../components/navbar';
import Login from './../components/loginForm';
import Post from './postview';

export default {
    components : {
        Navbar,
        Post,
        Login
    },
    data() {
        return {
            isLoggedIn : localStorage.user ? true : false
        }
    }
}
</script>

<style lang="stylus" scoped>

</style>
