<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(Request $req)
    {
        $user = session('user');
        $categories = Category::all()->where('user', $user);
        return view('categories', ['categories' => $categories]);

    }

    public function createCategory_get(Request $req)
    {
        return view('category-form');
    }

    public function createCategory_post(Request $req)
    {
        $user = session('user');
        $name = $req->input('name');
        $description = $req->input('description');
        $id = uniqid();

        $category = new Category;
        $category->id = $id;
        $category->name = $name;
        $category->description = $description;
        $category->user = $user;

        $category->save();

        return redirect("/category?id=$id");

    }

    public function getCategory(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');
        $category = Category::all()->where('user', $user)->where('id', $id)->first();
        if (is_null($category)) {
            return view('error404');
        }
        $items=Item::all()->where('user', $user)->where('category', $category->name);
        return view('category', ['category' => $category,'items'=>$items]);
    }
    public function updateCategory_get(Request $req)
    {

        $id = $req->input('id');
        $category = Category::all()->where('id', $id)->first();
        return view('category-form', ['category' => $category]);
    }
    public function updateCategory_post(Request $req)
    {
        $name = $req->input('name');
        $description = $req->input('description');
        $id = $req->input('id');

        $category = Category::all()->where('id', $id)->first();
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return redirect("/category?id=$id");

    }
    public function deleteCategory_post(Request $req)
    {
        $id = $req->input('id');
        $user = session('user');

        $category = Category::all()->where('id', $id)->where('user', $user)->first();

        $items=Item::all()->where('user', $user)->where('category', $category->name);
        if(count($items)>0){
            return view('category', ['category' => $category,'items'=>$items, 'error'=>"Please delete the following items first:"]);
        }
        $category->delete();
        return redirect('/categories');
    }
}
