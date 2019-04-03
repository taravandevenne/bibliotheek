<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street', 'buildingNumber', 'postcode', 'city', 'password', 'created_at', 'updated_at'
    ];
}
