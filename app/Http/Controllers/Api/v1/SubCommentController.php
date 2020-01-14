<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\SubCommentResource;
use App\Http\Resources\v1\SubCommentResourceCollection;
use Illuminate\Http\Request;
use App\SubComment;

class SubCommentController extends Controller
{
    public function index(SubComment $subComment):SubCommentResourceCollection {
        return new SubCommentResourceCollection(SubComment::paginate());
    }
}
