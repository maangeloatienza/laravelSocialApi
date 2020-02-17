<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\PostResource;
use App\Http\Resources\v1\PostResourceCollection;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function index(Post $post):PostResourceCollection {
        return new PostResourceCollection(Post::
        with(
            array(
                'comments'                  => function($comments){
                    $comments->select(
                        'id',
                        'post_id',
                        'comment',
                        'user_id',
                        'created_at',
                        'updated_at');
                },
                'comments.user'             => function($commentUser){
                    $commentUser->select(
                        'id',
                        'username',
                        'first_name',
                        'last_name');
                },
                'comments.subComments'      => function($subComments){
                    $subComments->select(
                        'id',
                        'comment_id',
                        'user_id',
                        'sub_comment',
                        'created_at',
                        'updated_at');
                },
                'comments.subComments.user' => function($subCommentsUser){
                    $subCommentsUser->select(
                        'id',
                        'username',
                        'first_name',
                        'last_name');
                }
            )
        )
        ->orderBy('id','DESC')
        ->paginate(5));
    }

    public function show(Post $post):PostResource {
        return new PostResource($post);
    }

    public function store(Request $request) {
        $request->validate([
            'content'   => "required",
            'user_id'   => 'required'
        ]);

        $post = Post::create($request->all());

        return new PostResource($post);
    }

    public function update(Post $post, Request $request) {
        $post->update($request->all());

        return new PostResource($post);
    }

    public function destroy(Post $post) {

        $post->destroy($post->id);

        return response()->json();
    }
}
