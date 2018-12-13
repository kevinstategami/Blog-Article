<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class car extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'cars';
    
    protected $fillable = [
        'carcompany', 'model','price'
    ];
}
