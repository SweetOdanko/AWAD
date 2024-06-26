<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cone extends Model
{
    public $table = 'cone';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['type', 'image_path', 'name', 'dscript', 'star', 'price'];
}
