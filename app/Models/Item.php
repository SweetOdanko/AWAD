<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $table = 'item';
    protected $fillable = ['title', 'price', 'dscrpt', 'flavor', 'ingredients', 'steps', 'image_path','type'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    
}