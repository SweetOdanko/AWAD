<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cone;
use App\Model\Cup;

class ItemListController extends Controller
{
    public function index()
    {
        $cups = Cup::all();
        $cones = Cone::all();
        return view('itemList', compact('cups', 'cones'));
    }

}
