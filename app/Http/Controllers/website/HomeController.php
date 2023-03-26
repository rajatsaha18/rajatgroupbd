<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $category;
    private $contents;
    public function index()
    {
        return view('website.home.home');
    }

    public function category($id)
    {
        $this->category = Category::find($id);
        $this->contents = Content::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('website.category.category',[
            'category' => $this->category,
            'contents' => $this->contents,
        ]);
    }
    public function serviceDetail()
    {
        return view('website.detail.service-detail');
    }
}
