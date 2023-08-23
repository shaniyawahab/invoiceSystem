<?php

namespace App\Http\Controllers\Admin;
use PDF;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemsController extends Controller
{
    public function index(){
        $items= Item::all();
         return view('admin.item.index',compact('items'));
     }
     public function add(){
        return view('admin.item.add');
    }

    public function insert(Request $request){
        $items=new Item();
        $items->name=$request->input('name');
        $items->quantity=$request->input('quantity');
        $items->unit_price=$request->input('unit_price');
        $items->tax=$request->tax;
        $items->save();
        return redirect('/items')->with('status','data inserted successfully');
    }
    public function update(Request $request,$id){
        $items= Item::find($id);

    }

   
}
