<template>

    <div class="col-sm-12 col-md-8">

        <div
            class="col-md-8 "
            v-for='post in posts'
            :key='post.id'
            >
            <div class="card mb-2 my-2 box-shadow">
                <div class='card-header'>
                    <h5>{{post.user.first_name + ' ' +post.user.last_name}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{post.content}}
                    </p>
                    <div class="justify-content-between align-items-center accordion" id='accordionParent'>
                        <div></div>
                        <div class="row" >
                            <button
                                type="button"
                                class="btn btn-sm btn-link"
                                data-toggle="collapse"
                                :data-target="`#commentSection${post.id}`"
                                aria-expanded="false"
                                :aria-controls="`commentSection${post.id}`"
                                >
                                Comments
                            </button>
                        </div>


                        <div class='row collapse ' data-collapse='#accordionParent' v-bind:id="`commentSection${post.id}`">
                            <div class='mb-1'>
                                <CustomForm>
                                    <div slot='formField' class='form-inline'>
                                        <div class="form-group mb-2">
                                            <input type="text" v-model='comment.comment' class='form-control'>
                                        </div>
                                        <button
                                            type='button'
                                            class='form-control btn btn-sm btn-success mb-2 mx-2'
                                            v-on:click.prevent="handleSubmitComment(post.id)">
                                            Add comment
                                        </button>
                                    </div>
                                </CustomForm>
                            </div>
                            <div
                                class='container card card-body'

                                v-for='comment in post.comments'
                                :key='comment.id'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <h5>
                                            {{comment.user.first_name + ' ' +comment.user.last_name}}
                                        </h5>
                                    </div>
                                    <div class='col-12'>
                                        <p>
                                            {{comment.comment}}
                                        </p>

                                    </div>

                                    <div class='row col-12'>
                                        <div class='container'>
                                            <button
                                                type="button"
                                                class="btn btn-sm btn-link"
                                                data-toggle="collapse"
                                                :data-target="`#subCommentSection${comment.id}`"
                                                aria-expanded="false"
                                                :aria-controls="`subCommentSection${comment.id}`"
                                                >
                                                Reply
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Comment reply -->
                                    <div class='row collapse ' data-collapse='#accordionCommentParent' v-bind:id="`subCommentSection${comment.id}`">
                                        <div class="container">
                                            <div class='mb-1'>
                                                <CustomForm>
                                                    <div slot='formField' class='form-inline'>
                                                        <div class="form-group mb-2">
                                                            <input type="text" v-model='sub_comment.sub_comment' class='form-control'>
                                                        </div>
                                                        <button
                                                            type='button'
                                                            class='form-control btn btn-sm btn-success mb-2 mx-2'
                                                            v-on:click.prevent="handleSubmitSubComment(comment.id)">
                                                            Send reply
                                                        </button>
                                                    </div>
                                                </CustomForm>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- subcomment -->
                                    <div
                                        class='container card card-body'
                                        v-for='sub_comment in comment.sub_comments'
                                        :key='sub_comment.id'>
                                        <div class='row'>
                                            <div class='col-12'>
                                                <h5>
                                                    {{sub_comment.user.first_name + ' ' +sub_comment.user.last_name}}
                                                </h5>
                                            </div>
                                            <div class='col-12'>
                                                <p>
                                                    {{sub_comment.sub_comment}}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>


                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
import Vue from 'vue';
import CustomForm from './customForm';
import PostForm from './postForm';


export default {
    props : {
        posts : {type : Array},
        getPosts : {type : Function},
    },
    components : {
        CustomForm,
        PostForm
    },
    data() {
        return {
            comment : {
                post_id : null,
                user_id : null,
                comment : null
            },
            sub_comment : {
                comment_id : null,
                user_id : null,
                sub_comment : null

            }
        }
    },
    methods : {
        handleSubmitComment : function(postId){

            let user = JSON.parse(localStorage.getItem('user'));
            this.comment.user_id = user.id;
            this.comment.post_id = postId;

            axios
            .post('comment',
                this.comment
            )
            .then((response)=>{
                this.getPosts();
                this.comment.comment = '';
            })
            .catch((error)=>{
                console.log(error);
            });
        },
        handleSubmitSubComment : function(commentId){
            let user = JSON.parse(localStorage.getItem('user'));
            this.sub_comment.user_id = user.id;
            this.sub_comment.comment_id = commentId;

            axios
            .post('subcomment',
                this.sub_comment
            )
            .then((response)=>{
                this.getPosts();
                this.sub_comment.sub_comment = '';
            })
            .catch((error)=>{
                console.log(error);
            });
        }
    },
    // created() {
    //     console.log('beforeUpdate!')
    //     this.getPosts();
    // },
    watch : {
        getPosts : {
            handler : 'getPosts',
            immediate : true
        }
    }

}
</script>

<style scoped>
    .post-container {
        border : 2px solid;
    }
    button {
        text-decoration: none;
    }
</style>
