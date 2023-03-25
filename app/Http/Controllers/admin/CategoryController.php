<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;
    private $category;
    public function index()
    {
        return view('admin.category.add-category');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Category::newCategory($request);
        return redirect('/manage-category')->with('message', 'category create successfully');
    }
    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage-category', ['categories' => $this->categories]);
    }
    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'category update successfully');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'category delete successfully');
    }
}
