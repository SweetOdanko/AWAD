<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ICuser extends Model
{
    protected $fillable = ['username', 'password', 'email'];

    protected $hidden = ['password'];
}
