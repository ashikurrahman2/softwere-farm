<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Banner extends Model
{

    use HasFactory;
    private static $image, $imageName, $directory, $imageUrl;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'banner_image',
        'banner_description',
        'banner_author',
    ];

            // Function to upload and resize image
private static function getImageUrl($request)
{
    self::$image = $request->file('banner_image');
    if (self::$image) {
        self::$imageName = time() . '_' . self::$image->getClientOriginalName(); // Unique image name
        self::$directory = "upload/banners/";
        self::$image->move(self::$directory, self::$imageName);

        // Resize the image using Intervention Image
        $imageManager = new ImageManager(new Driver());
        $image = $imageManager->read(self::$directory . self::$imageName);
        $image->resize(1200, 600); // Resize to required dimensions
        $image->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    return null;
    }

        // Create a new Rent entry
        public static function newBanner($request)
        {
            self::$imageUrl = $request->file('banner_image') ? self::getImageUrl($request) : '';
    
            $banner = new self();
            self::saveBasicInfo($banner, $request, self::$imageUrl);
        }

                  // Update an existing About entry
    public static function updateBanner($request, $id)
    {
    // Fetch the team record using the ID
    $banner = self::findOrFail($id);

        if ($request->file('banner_image')) {
            if (file_exists($banner->banner_image)) {
            unlink($banner->banner_image);
            }
        self::$imageUrl = self::getImageUrl($request);
        } else {
        self::$imageUrl = $banner->banner_image;
    }

    self::saveBasicInfo($banner, $request, self::$imageUrl);
        }

          // Save or update basic info in the database
   private static function saveBasicInfo($banner, $request, $imageUrl)
   {
       $banner->banner_image             = $imageUrl;
       $banner->banner_description       = $request->banner_description;
       $banner->banner_author            = $request->banner_author;
       $banner->save();
   }

      // Delete an Rent entry
public static function deleteBanner($banner)
{
    if (file_exists($banner->banner_image)) {
        unlink($banner->banner_image);
    }
    
    $banner->delete();

    }
}
