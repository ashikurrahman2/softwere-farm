<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Banner extends Model
{

    use HasFactory;
 // Fillable fields to allow mass assignment
    protected $fillable = [
        'question',
        'answer',
    ];

    // Create a new banner entry
    public static function newBanner($request)
    {
        $banner = new self();
        self::saveBasicInfo($banner, $request);
    }

    // Update an existing banner entry
    public static function updateBanner($request, $id)
    {
        $banner = self::findOrFail($id);
        self::saveBasicInfo($banner, $request);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($banner, $request)
    {
        $banner->question = $request->question;
        $banner->answer = $request->answer;
        $banner->save();
    }

    // Delete a banner entry
    public static function deleteBanner($id)
    {
        $banner = self::findOrFail($id);
        $banner->delete();
    }
}
