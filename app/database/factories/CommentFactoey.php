<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
      'body'=>'こっからコメントです。米、コメントこめんとComment米、コメントこめんとComment米、
      コメントこめんとComment米、コメントこめんとComment米、コメントこめんとComment米、
      コメントこめんとComment米、コメントこめんとComment米、コメントこめんとComment米、
      コメントこめんとComment米、コメントこめんとComment米、コメントこめんとComment米、
      コメントこめんとComment米、コメントこめんとComment米、コメントこめんとComment米、
      コメントこめんとComment米、コメントこめんとComment'
    ];
});
