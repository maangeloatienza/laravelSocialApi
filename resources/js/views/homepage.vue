<template>
    <div>
        <Navbar></Navbar>
        <Post></Post>
    </div>
</template>

<script>
import Navbar from './../components/navbar';
import Post from './postview';

export default {
    components : {
        Navbar,
        Post,
        // Login
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
