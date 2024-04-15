<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    public $table = 'cup';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['type', 'image_path', 'name', 'dscript', 'star', 'price'];

 
}