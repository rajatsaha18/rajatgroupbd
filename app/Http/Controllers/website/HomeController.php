<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $category;
    private $contents;
    private $content;
    private $sliders;
    public function index()
    {
        $this->sliders = Slider::all();
        return view('website.home.home', ['sliders' => $this->sliders]);
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
    public function serviceDetail($id)
    {
        $this->content = Content::find($id);
        return view('website.detail.service-detail', ['content' => $this->content]);
    }
    public function aboutUs()
    {
        return view('website.about.about-us');
    }
    public function contact()
    {
        return view('website.contact.contact');
    }
}
