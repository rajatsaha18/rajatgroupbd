<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;
    public function index()
    {
        return view('admin.category.add-category');
    }
    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message', 'category create successfully');
    }
    public function manage()
    {
       $this->categories = Category::all();
        return view('admin.category.manage-category',['categories' => $this->categories]);
    }
}
