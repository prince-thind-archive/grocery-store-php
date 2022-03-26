<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getItems(Request $req)
    {
        $user = session('user');
        $items = Item::all()->where('user', $user);
        return view('items', ['items' => $items]);

    }
}
