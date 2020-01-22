<template>

<div class="col-sm-12 col-md-4">
    <div class="my-2">

        <form action="" class="form-group">

            <textarea
                class="form-control mb-2"
                v-model='post.content'
                id="post-area"
                cols="30"
                rows="5"
                placeholder="What's on your mind?"></textarea>
            <button
                type="button"
                class="btn btn-md btn-success float-right"
                v-on:click='handleSubmit'>
                Post
            </button>
        </form>
    </div>
</div>
</template>

<script>
export default {

    props : {
        posts : {type : Array},
        getPosts : {type : Function}
    },

    data(){
        return {
            post : {
                user_id : null,
                content : null,
            }
        }
    },

    methods : {

        handleSubmit : function (){
            let user = JSON.parse(localStorage.getItem('user'));
            this.post.user_id = user.id;
            axios
                .post('/post',
                    this.post
                )
                .then((response)=>{
                    this.getPosts();
                    this.post.content = '';
                })
                .catch((error)=>{
                    console.log(error)
                })
        }
    },
    created (){
        this.getPosts();
    }
}
</script>

<style scoped>
    #post-area {
        resize : none;
    }
</style>
