<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title'=>'投稿のタイトル',
        'body'=>"こっから本文です。　テキストてきすとtextテキストてきすとtextテキストてきすとtext
        テキストてきすとtextテキストてきすとtextテキストてきすとtextテキストてきすとtextテキストてきすとtext
        テキストてきすとtextテキストてきすとtextテキストてきすとtextテキストてきすとtextテキストてきすとtext
        テキストてきすとtextテキストてきすとtextテキストてきすとtext"
    ];
});
