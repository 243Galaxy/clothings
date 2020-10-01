<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    public function orderg()
    {
        return $this->belongsToMany('App\Model\Fgallery');
    }

}
