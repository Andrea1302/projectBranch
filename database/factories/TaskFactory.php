<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'Name'=>'Cucinare',
        'description'=>'devi cucinare la pasta',
        'Data'=>'2022/13/01'
    ];
});
