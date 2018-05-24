<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {   $item=Item::Paginate(2); 
        return view('userpanel.itemrec',compact('item'));
    }
}
