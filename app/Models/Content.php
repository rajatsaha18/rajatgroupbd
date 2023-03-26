<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    private static $contents;
    private static $content;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'content-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newContent($request)
    {
        self::$content = new Content();
        self::$content->category_id     = $request->category_id;
        self::$content->name            = $request->name;
        self::$content->description     = $request->description;
        self::$content->image           = self::getImageUrl($request->file('image'));
        self::$content->status          = $request->status;
        self::$content->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
