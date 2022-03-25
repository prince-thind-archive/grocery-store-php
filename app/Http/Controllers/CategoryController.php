<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(Request $req)
    {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);

    }

    public function createCategory_get(Request $req)
    {
        return 'create category get';
    }

    public function createCategory_post(Request $req)
    {
        return 'create category post';
    }
    public function getCategory(Request $req)
    {
        $id=$req->input('id');
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
