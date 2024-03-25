<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'price', 'dscrpt', 'flavor', 'ingredients', 'steps', 'image_path'];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
