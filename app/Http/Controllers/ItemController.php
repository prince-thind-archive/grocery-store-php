<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function createitem_get(Request $req)
    {
        $user = session('user');
        $categories = Category::all()->where('user', $user);
        return view('item-form',["categories"=>$categories]);
    }

    public function createitem_post(Request $req)
    {
        $user = session('user');
        $name = $req->input('name');
        $description = $req->input('description');
        $category = $req->input('category');
        $price = $req->input('price');
        $id = uniqid();

        $item = new item;
        $item->id = $id;
        $item->name = $name;
        $item->description = $description;
        $item->user = $user;
        $item->category = $category;
        $item->price = $price;

        $item->save();

        return redirect("/item?id=$id");

    }

    

    public function getitem(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');
        $item = item::all()->where('user', $user)->where('id', $id)->first();
        if (is_null($item)) {
            return view('error404');
        }
        return view('item', ['item' => $item]);
    }
    
    public function updateitem_get(Request $req)
    {
        $user = session('user');
        $categories = Category::all()->where('user', $user);
        $id = $req->input('id');
        $item = item::all()->where('id', $id)->first();
        return view('item-form', ['item' => $item,"categories"=>$categories]);
    }
    public function updateitem_post(Request $req)
    {
        $name = $req->input('name');
        $description = $req->input('description');
        $id = $req->input('id');
        $category = $req->input('category');
        $price = $req->input('price');

        $item = item::all()->where('id', $id)->first();
        $item->name = $name;
        $item->description = $description;
        $item->category = $category;
        $item->price = $price;
        $item->save();

        return redirect("/item?id=$id");

    }
    public function deleteitem_post(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');

        $item = item::all()->where('id', $id)->where('user', $user)->first();

        $item->delete();
        return redirect('/items');
    }
    
}
