<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    public $table = 'cup';
    protected $fillable = ['type', 'image_path', 'name', 'dscript', 'star', 'price'];

    public function index() {
        $cups = Cup::all();
        return view('itemList', ['cups'=>$cups]);
    }
}

