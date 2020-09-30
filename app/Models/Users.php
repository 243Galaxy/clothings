<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    protected $fillable = [
        'fullname',
        'usertype',
        'orgId',
        'phone',
        'email',
        'password',
        'active'
    ];
}
