<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubComment;
use Faker\Generator as Faker;

$factory->define(SubComment::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'comment_id' => '1',
        'sub_comment' => 'Thanks for the comment!'
    ];
});
