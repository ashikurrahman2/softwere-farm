<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Ressume extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'edu_degree',
        'pass_year',
        'pass_recommand',
        'job_organization',
        'job_designation',
        'job_summary',
        'job_image',
    ];

    // Function to upload and resize image
    private static function getImageUrl($request)
    {
        self::$image = $request->file('job_image');
        if (self::$image) {
            self::$imageName = time() . '_' . self::$image->getClientOriginalName();
            self::$directory = "upload/ressumes/";
            self::$image->move(self::$directory, self::$imageName);

            // Resize the image using Intervention Image
            $imageManager = new ImageManager(new Driver());
            $image = $imageManager->read(self::$directory . self::$imageName);
            $image->resize(500, 500); // Resize to desired dimensions
            $image->save(self::$directory . self::$imageName);

            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }

        return null;
    }

    // Create a new Resume entry
    public static function newRessume($request)
    {
        self::$imageUrl = $request->file('job_image') ? self::getImageUrl($request) : '';

        $ressume = new self();
        self::saveBasicInfo($ressume, $request, self::$imageUrl);
    }

    // Update an existing Resume entry
    public static function updateRessume($request, $id)
    {
        $ressume = self::findOrFail($id);

        if ($request->file('job_image')) {
            if (file_exists($ressume->job_image)) {
                unlink($ressume->job_image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $ressume->job_image;
        }

        self::saveBasicInfo($ressume, $request, self::$imageUrl);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($ressume, $request, $imageUrl)
    {
        $ressume->job_image             = $imageUrl;
        $ressume->edu_degree            = $request->edu_degree;
        $ressume->pass_year             = $request->pass_year;
        $ressume->pass_recommand        = $request->pass_recommand;
        $ressume->job_organization      = $request->job_organization;
        $ressume->job_designation       = $request->job_designation;
        $ressume->job_summary           = $request->job_summary;
        $ressume->save();
    }

    // Delete a Resume entry
    public static function deleteRessume($ressume)
    {
        if (file_exists($ressume->job_image)) {
            unlink($ressume->job_image);
        }

        $ressume->delete();
    }
}
