<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;
    private $subCategories;
    public function index(){
        $this->categories = Category::all();
        return view('admin.subcategory.add-subcategory', ['categories' => $this->categories]);
    }
    public function create(Request $request){
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|unique:sub_categories',
        ]);
        SubCategory::newSubCategory($request);
        return redirect('/manage-sub-category')->with('message', 'Create SubCategory Successfully');
    }

    public function manage()
    {
        $this->subCategories = SubCategory::all();
        return view('admin.subcategory.manage', ['subCategories' => $this->subCategories]);
    }
}
