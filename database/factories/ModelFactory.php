<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Article::class, function (Faker\Generator $faker) {

/*填充文章表*/
        return [
            'title'     =>      $faker->sentences(mt_rand(3,8)),
            'content'   =>      join( "\n\n" , $faker->paragraphs(mt_rand(2,5))),
            'published' =>      $faker->dateTimeBetween('-2 month' , '+1 days'),
        ];


});
