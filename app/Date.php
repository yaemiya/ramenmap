<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use SoftDeletes;

    protected $dates = [
        'traded_day',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
