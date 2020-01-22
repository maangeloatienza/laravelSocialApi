<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    'prefix' => 'v1'
], function(){

    Route::resource('user', 'Api\v1\UserController')
        ->only(['index','show','destroy','update','store']);

    Route::resource('post', 'Api\v1\PostController')
        ->only(['index','show','destroy','update','store'])
        ->middleware('jwt.auth');

    Route::resource('comment', 'Api\v1\CommentController')
        ->only(['index','show','destroy','update','store']);

    Route::resource('subcomment', 'Api\v1\SubCommentController')
        ->only(['index','show','destroy','update','store']);

    Route::post('/login', 'Api\Auth\LoginController@login');
    Route::post('/logout', 'Api\Auth\LoginController@logout');

});

