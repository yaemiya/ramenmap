<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
    protected $fillable = [
        'name', 'address', 'category_id', 'subcategory_id', 'user_id', 'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
