<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Service extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $photoUrl;

    protected $fillable = [
        'service_icon',
        'service_title',
        'service_details',
        'service_image',
        'service_subtitle',
        'service_category',
    ];
    // Function to upload and resize image
    private static function getImageUrl($imageFile, $directory)
    {
        if ($imageFile) {
            self::$imageName = time() . '_' . $imageFile->getClientOriginalName(); // Unique image name
            $path = $directory;
            $imageFile->move($path, self::$imageName);

            // Resize the image using Intervention Image
            $imageManager = new ImageManager(new Driver());
            $image = $imageManager->read($path . self::$imageName);
            $image->resize(600, 600); // Resize to required dimensions
            $image->save($path . self::$imageName);

            return $path . self::$imageName;
        }
        return null;
    }

    // Store new service
    public static function newServices($request)
    {
        $photoUrl = $request->file('service_image') ? self::getImageUrl($request->file('service_image'), "upload/service-photos/") : '';
        $signatureUrl = $request->file('service_icon') ? self::getImageUrl($request->file('service_icon'), "upload/icon-services/") : '';

          $service = new self();
        self::saveBasicInfo($service, $request, $photoUrl, $signatureUrl);
    }

public static function updateServices($request, $id)
{
    $service = self::findOrFail($id);

    // Check and delete old icon if new icon is uploaded
    if ($request->file('service_icon') && file_exists($service->service_icon)) {
        unlink($service->service_icon);
    }

    // Check and delete old image if new image is uploaded
    if ($request->file('service_image') && file_exists($service->service_image)) {
        unlink($service->service_image);
    }

    // Upload new files (or keep old if not uploaded)
    $newIconPath = $request->file('service_icon') 
        ? self::getImageUrl($request->file('service_icon'), 'upload/icon-services/') 
        : $service->service_icon;

    $newImagePath = $request->file('service_image') 
        ? self::getImageUrl($request->file('service_image'), 'upload/service-photos/') 
        : $service->service_image;

    // Save all updated data
    self::saveBasicInfo($service, $request, $newImagePath, $newIconPath);
}


    // Save or update basic info
    private static function saveBasicInfo($service, $request, $photoUrl, $signatureUrl)
    {
        $service->service_icon      = $signatureUrl;
        $service->service_image     = $photoUrl;
        $service->service_title     = $request->service_title;
        $service->service_subtitle  = $request->service_subtitle;
        $service->service_details   = $request->service_details;
        $service->service_category  = $request->service_category;
        $service->save();
    }

    // Delete a service
    public static function deleteServices($service)
    {
        if (file_exists($service->service_icon)) {
            unlink($service->service_icon);
        }

        if (file_exists($service->service_image)) {
            unlink($service->service_image);
        }

        $service->delete();
    }
}
