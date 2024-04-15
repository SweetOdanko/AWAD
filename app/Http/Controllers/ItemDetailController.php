<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Cup;
use App\Models\Cone;
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


    public function index(){
        return Item::all();
    }


    public function  createForm(){
        return view('createForm');
    }
    //need one create button on itemlist page
    public function store(Request $request)
    {      
       $id=Item::create($request->all())->id;

       $type=$request->type;
       if($type=='cone'){
        $cone=new Cone;
        $cone->id=$id;
        $cone->name=$request->title;
        $cone->type="ice cone floavour".rand(1,3);
        $name=basename($request->image_path);
        $cone->image_path='Ice_Cream/'.$name;
        $cone->dscript=$request->dscrpt;
        $cone->star=rand(4,5);
        $cone->price=$request->price;
        $cone->save();
       }else{
        $cup=new Cup;
        $cup->id=$id;
        $cup->name=$request->title;
        $cup->type="ice cup floavour".rand(1,3);
        $name=basename($request->image_path);
        $cup->image_path='Ice_Cream/'.$name;
        $cup->dscript=$request->dscrpt;
        $cup->star=rand(4,5);
        $cup->price=$request->price;
        $cup->save();
       }
       return redirect('/itemList');

        
    
    }


    public function updateForm($id){
        $item=Item::findOrFail($id);
        return view('updateForm',['item'=>$item]);
    }

    //update button on itemdetails page
    public function update(Request $req)
    {
        $item=Item::findOrFail($req->id);
        $item->update($req->all());
        if($item->type=='cone'){
            $cone=Cone::findOrFail($req->id);
            $cone->update($req->all());
        }else{
            $cup=Cup::findOrFail($req->id);
            $cup->update($req->all());
        }

        return redirect('/itemDetail/'.$req->id);
    }
    
    //delete button on itemdetail page
    public function destroy($id)
    {
        $item=Item::findOrFail($id);
        $type=$item->type;
      
        if($type=='cup'){
            $cup=Cup::findOrFail($id);
            $cup->delete();
        }else{
            $cone=Cone::findOrFail($id);
            $cone->delete();
        }
        $item->delete();
        return redirect('/itemList');
    }
}