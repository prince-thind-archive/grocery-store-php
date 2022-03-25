<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(Request $req)
    {
        $user=session('user');
        $categories = Category::all()->where('user',$user);
        return view('categories', ['categories' => $categories]);

    }

    public function createCategory_get(Request $req)
    {
        return view('category-form');
    }

    public function createCategory_post(Request $req)
    {
        $user=session('user');
        $name=$req->input('name');
        $description=$req->input('description');
        $id=uniqid();

        $category=new Category;
        $category->id=$id;
        $category->name=$name;
        $category->description=$description;
        $category->user=$user;

        $category->save();

        return redirect('/categories');

    }
    
    public function getCategory(Request $req)
    {
        $id = $req->input('id');
        return "get $id";
    }
    public function updateCategory_get(Request $req)
    {
        return 'update category get';
    }
    public function updateCategory_post(Request $req)
    {
        return 'update category post';
    }
    public function deleteCategory_get(Request $req)
    {
        return 'delete category get';
    }
    public function createCategory_delete(Request $req)
    {
        return 'delete category';
    }
}
