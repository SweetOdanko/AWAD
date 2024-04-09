<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cone;
use App\Models\Cup;

class ItemListController extends Controller
{
    public function index()
    {
        $cups = Cup::all();
        $cones = Cone::all();
        return view('itemList', [
            'cups' => $cups,
            'cones' => $cones,
        ]);
    }

}
