<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table="items";
    protected $fillable=[
        'name',
        'quantity',
        'unit_price',
        'tax',
    ];
    public static $rules = [
        'name' => 'required',
        'quantity' => 'required|numeric',
        'unit_price' => 'required|numeric',
        'tax' => 'required',
    ];
}
