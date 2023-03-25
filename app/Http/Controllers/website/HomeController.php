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
        return view('website.home.home');
    }

    public function category($id)
    {
        $this->category = Category::find($id);
        return view('website.category.category',[
            'category' => $this->category,
        ]);
    }
    public function serviceDetail()
    {
        return view('website.detail.service-detail');
    }
}
