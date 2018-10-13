<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $categories = array(
        'PHP',
        'JAVASCRIPT',
        'JAVA',
        'DISEÑO WEB',
        'SERVIDORES',
        'MYSQL',
        'NOSQL',
        'BIGDATA',
        'AMAZON WEB SERVICES'
    );
    return [
        'name' => $faker->randomElement($categories),
        'description' => $faker->sentence,
    ];
});
