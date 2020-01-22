<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CommentResource;
use App\Http\Resources\v1\CommentResourceCollection;
use Illuminate\Http\Request;
use App\Comment;
use App\SubComment;

class CommentController extends Controller
{
    public function index(Comment $comment):CommentResourceCollection {
        return new CommentResourceCollection(Comment::
        with(
            array(
                'subComments'               => function($subComments){
                    $subComments->select(
                        'id',
                        'comment_id',
                        'user_id',
                        'sub_comment',
                        'created_at',
                        'updated_at');
                },
                'subComments.user'          => function($subCommentsUser){
                    $subCommentsUser->select(
                        'id',
                        'username',
                        'first_name',
                        'last_name');
                },
                'user'                      => function
                ($commentUser){
                    $commentUser->select(
                        'id',
                        'username',
                        'first_name',
                        'last_name');
                }

            )
        )
        ->paginate());
    }

    public function show(Comment $comment):CommentResource {
        return new CommentResource($comment);
    }

    public function store( Request $request) {
        $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'comment' => 'required'
        ]);

        $comment = Comment::create($request->all());

        return new CommentResource($comment);
    }

    public function update(Request $request, Comment $comment) {
        $comment->update($request->all());

        return new CommentResource($comment);
    }

    public function destroy(Comment $comment) {

        $comment->destroy($comment->id);

        return response()->json();
    }


}
