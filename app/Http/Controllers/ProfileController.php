<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Item;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $req)
    {
        $user = session('user');
        $categories = Category::all()->where('user', $user);
        $items = Item::all()->where('user', $user);

        $itemsCount=count($items);
        $categoriesCount=count($categories);
        return view('profile', ["itemsCount" => $itemsCount, "categoriesCount" => $categoriesCount]);
    }
}
