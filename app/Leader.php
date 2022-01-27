<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'data_nascita',
        'rule',
        'salary'
    ];
}
