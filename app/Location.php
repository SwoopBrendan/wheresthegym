<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'longitude', 'latitude', 'number', 'street_one', 'street_two', 'street_three', 'suburb', 'city', 'province', 'postal_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
