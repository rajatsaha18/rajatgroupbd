<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;
    public function index(){
        $this->categories = Category::all();
        return view('admin.subcategory.add-subcategory', ['categories' => $this->categories]);
    }
}
