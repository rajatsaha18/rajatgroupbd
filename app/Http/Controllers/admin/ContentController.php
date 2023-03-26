<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return view('admin.content.index');
    }

    public function create(Request $request)
    {
        Content::newContent($request);
        return redirect('/manage-content')->with('message', 'create content successfully');
    }
    public function manage()
    {
        return view('admin.content.manage');
    }
}
