<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $category;
    public function index()
    {
        $this->categories = Category::all();
        return view('website.home.home',['categories' => $this->categories]);
    }

    public function category($id)
    {
        $this->category = Category::find($id);
        $this->categories = Category::all();
        return view('website.category.category',[
            'categories' => $this->categories,
            'category' => $this->category,
        ]);
    }
    public function serviceDetail()
    {
        return view('website.detail.service-detail');
    }
}
