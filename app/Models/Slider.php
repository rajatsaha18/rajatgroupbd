<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    private static $slider;
    private static $sliders;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'slider-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newSlider($request)
    {
        self::$slider = new Slider();
        self::$slider->name  = $request->name;
        self::$slider->image = self::getImageUrl($request->file('image'));
        self::$slider->save();
    }

    public static function updateSlider($request, $id)
    {
        self::$slider = Slider::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$slider->image;
        }
        self::$slider->name  = $request->name;
        self::$slider->image = self::$imageUrl;
        self::$slider->save();
    }
}
