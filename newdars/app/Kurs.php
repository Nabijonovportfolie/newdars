<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurs extends Model
{
    protected $fillable = [
        'name', 'title', 'image',
    ];
}
