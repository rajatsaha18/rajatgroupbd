<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    private static $categories;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image){
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'category-images/';
        $image->move(self::$directory , self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->name           = $request->name;
        self::$category->description    = $request->description;
        self::$category->image          = self::getImageUrl($request->file('image'));
        self::$category->status         = $request->status;
        self::$category->save();
    }
}
