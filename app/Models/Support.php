<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Support extends Authenticatable
{
    public $table = 'support';
    use Notifiable;
    protected $guard = 'author';
    protected $fillable = [
    'name', 'email', 'password',
    ];
    protected $hidden = [
    'password', 'remember_token',
    ];
}
