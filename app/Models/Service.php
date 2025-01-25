<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Service extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'service_icon',
        'service_title',
        'service_details',
        'service_subtitle',
        'working_process',
        'service_benifit',
        'service_provide',
    ];

            // Function to upload and resize image
private static function getImageUrl($request)
{
    self::$image = $request->file('service_icon');
    if (self::$image) {
        self::$imageName = time() . '_' . self::$image->getClientOriginalName(); // Unique image name
        self::$directory = "upload/services/";
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
       public static function newServices($request)
       {
           self::$imageUrl = $request->file('service_icon') ? self::getImageUrl($request) : '';
   
           $service = new self();
           self::saveBasicInfo($service, $request, self::$imageUrl);
       }

               // Update an existing About entry
    public static function updateServices($request, $id)
    {
    // Fetch the team record using the ID
    $service = self::findOrFail($id);

        if ($request->file('service_icon')) {
            if (file_exists($service->service_icon)) {
            unlink($service->service_icon);
            }
        self::$imageUrl = self::getImageUrl($request);
        } else {
        self::$imageUrl = $service->service_icon;
    }

    self::saveBasicInfo($service, $request, self::$imageUrl);
        }

          // Save or update basic info in the database
   private static function saveBasicInfo($service, $request, $imageUrl)
   {
       $service->service_icon           = $imageUrl;
       $service->service_title          = $request->service_title;
       $service->service_subtitle          = $request->service_subtitle;
       $service->working_process          = $request->working_process;
       $service->service_benifit          = $request->service_benifit;
       $service->service_provide          = $request->service_provide;
       $service->service_details        = $request->service_details;
       $service->save();
   }


   // Delete an Rent entry
public static function deleteServices($service)
{
    if (file_exists($service->service_icon)) {
        unlink($service->service_icon);
    }
    
    $service->delete();

    }
}
