<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemDetailController extends Controller
{
    public function show($id)
    {
        $item = Item::findOrFail($id); 
        return view('itemDetail', ['item' => $item]);
    }
}
