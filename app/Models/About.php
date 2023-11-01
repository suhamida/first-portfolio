<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    private static $about, $image, $imageName, $directory, $imageUrl;

    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = "upload/about/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newInfo($request)
    {
        self::$imageUrl = $request->file('image') ? self::getImageUrl($request) : ' ';

        self::$about = new About();
        self::$about->summary        = $request->summary;
        self::$about->image          = self::$imageUrl;
        self::$about->bday           = $request->bday;
//        self::$about->website        = $request->website;
//        self::$about->phone          = $request->phone;
        self::$about->city           = $request->city;
        self::$about->age            = $request->age;
//        self::$about->degree         = $request->degree;
//        self::$about->email          = $request->email;
//        self::$about->availability   = $request->availability;
//        self::$about->cover          = $request->cover;
        self::$about->save();
    }

}
