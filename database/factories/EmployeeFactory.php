<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name'=>'Andrea',
        'surname'=>'Scarpa',
        'date_of_birth'=> '1996/02/13',
        'rule'=> 'Impiegato',
        'salary'=>150000,
        'iban'=>'IT00024FFHHH2234'
    ];
});
