<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $sliders;
    private $slider;
    public function index()
    {
        return view('admin.slider.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Slider::newSlider($request);
        return redirect('/manage-slider')->with('message', 'Create Slider Successfully');
    }
    public function manage()
    {
        $this->sliders = Slider::all();
        return view('admin.slider.manage',['sliders' => $this->sliders]);
    }

    public function edit($id)
    {
        $this->slider = Slider::find($id);
        return view('admin.slider.edit',['slider' => $this->slider]);
    }

    public function update(Request $request, $id)
    {
        Slider::updateSlider($request, $id);
        return redirect('/manage-slider')->with('message', 'Update Slider Successfully');
    }
}
