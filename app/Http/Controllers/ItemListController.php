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
            'showHeader1' => true,
            'showHeader2' => true,
            'selectedCategory'=>'all',
        ]);
    }

    public function search(Request $req) {
        $search = $req->input('searchInput');
        $cups = Cup::where('name', 'like', "%{$search}%")->get();
        $cones = Cone::where('name', 'like', "%{$search}%")->get();
    
        $emptyCups = $cups->isEmpty();
        $emptyCones = $cones->isEmpty();
    
        $showHeader1 = !$emptyCups;
        $showHeader2 = !$emptyCones;
    
        if (!$req->has('searchInput')) {
            $showHeader1 = true; 
            $showHeader2 = true; 
        }
    
        return view('itemList', [
            'cups' => $cups,
            'cones' => $cones,
            'showHeader1' => $showHeader1,
            'showHeader2' => $showHeader2,
            'selectedCategory'=>'all',
        ]);
    }

    public function filter(Request $request) {
        $category = $request->input('categoryFilter');
    
        if ($category === 'all') {
            $cups = Cup::all();
            $cones = Cone::all();
        } else {
            $cups = Cup::where('type', 'like', '%' . $category . '%')->get();
            $cones = Cone::where('type', 'like', '%' . $category . '%')->get();
        }
    
        $emptyCups = $cups->isEmpty();
        $emptyCones = $cones->isEmpty();
    
        $showHeader1 = !$emptyCups;
        $showHeader2 = !$emptyCones;
    
        if ($category === 'all') {
            $showHeader1 = true; 
            $showHeader2 = true; 
        }
        
        return view('itemList', [
            'cups' => $cups,
            'cones' => $cones,
            'showHeader1' => $showHeader1,
            'showHeader2' => $showHeader2,
            'selectedCategory'=>$category,
        ]);
    }
}
