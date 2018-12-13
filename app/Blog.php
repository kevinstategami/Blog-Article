<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Blog extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Blog';

    public function kategori()
    {
    	return $this->belongsTo("App\Kategori", "kategori_id", "id");
    }
}
