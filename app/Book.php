<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'title', 'description', 'year', 'ISBN', 'photo', 'totalBooks', 'created_at', 'updated_at'
    ];

}
