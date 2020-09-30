<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fgallery extends Model
{
    protected $table = 'fromgallery';
    

    public function orderg()
    {
      return $this->belongsToMany('App\Model\Gallery');
    }
}
