<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'date_in', 'date_out', 'created_at', 'updated_at'
    ];
}
