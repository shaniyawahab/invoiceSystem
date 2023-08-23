<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index(){
        $items =  Item::all();
        return view('invoice',compact('items'));
    }
}
