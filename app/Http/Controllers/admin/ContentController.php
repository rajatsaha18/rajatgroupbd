<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    private $contents;
    private $content;
    public function index()
    {
        return view('admin.content.index');
    }

    public function create(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ]);
        Content::newContent($request);
        return redirect('/manage-content')->with('message', 'create content successfully');
    }
    public function manage()
    {
       $this->contents = Content::all();
        return view('admin.content.manage',['contents' => $this->contents]);
    }
}
