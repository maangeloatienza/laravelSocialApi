<template>
    <div>
        <div class="container">
            <PostForm></PostForm>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import PostForm from './../components/postForm';

export default {
    components : {
        PostForm
    }
}
</script>

<style lang="stylus" scoped>

</style>
