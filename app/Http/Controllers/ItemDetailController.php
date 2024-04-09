<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemDetailController extends Controller
{
    public function show($id)
    {
        $item = Item::findOrFail($id); 
        return view('itemDetail', [
            'item' => $item,
            'id' => $id, 
            'price' => $item->price 
        ]);
    }
}
