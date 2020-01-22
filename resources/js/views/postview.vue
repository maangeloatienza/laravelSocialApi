<template>
    <div id='content-body'>
        <div class="container">
            <div class='row'>
                <PostForm
                    v-bind:posts='posts'
                    v-bind:getPosts = 'getPosts'
                >
                </PostForm>
                <Post
                    v-bind:posts='posts'
                    v-bind:getPosts = 'getPosts'
                ></Post>
            </div>
        </div>
    </div>
</template>

<script>
import PostForm from './../components/postForm';
import Post from './../components/post';

export default {

    components : {
        PostForm,
        Post
    },
    data (){
        return {
            posts : []
        }
    },

    methods : {
        getPosts : function(){
            axios
            .get('post')
            .then((response)=>{
                let data = response.data.data;
                this.posts = data;
            })
            .catch((error)=>{
                console.log(error);
            });
        }
    },
    created : function (){
        this.getPosts();
    }
}
</script>

<style  scoped>
    #content-body {
         padding-top: 40px;
    }
</style>
