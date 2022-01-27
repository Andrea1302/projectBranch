<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Leader;
use Faker\Generator as Faker;

$factory->define(Leader::class, function (Faker $faker) {
    return [
        'name'=>'Mario',
        'surname'=>'Bross',
        'data_nascita'=>'1991/01/01',
        'rule'=>'Boss',
        'salary'=>1222000
    ];
});
