<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CaseStudy extends Model
{
    use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    
    // Fillable fields to allow mass assignment
    protected $fillable = [
        'case_title',
        'case_description',
        'project_image',
        'project_title',
        'project_description',
        'benifit_description',
        'benifit_image',
        'process_description',
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
            $image->resize(1200, 600); // Resize to required dimensions
            $image->save($path . self::$imageName);

            return $path . self::$imageName;
        }
        return null;
    }

    // Create a new About entry
    public static function newCase($request)
    {
        $photoUrl = $request->file('project_image') ? self::getImageUrl($request->file('project_image'), "upload/case-photos/") : '';
        $signatureUrl = $request->file('benifit_image') ? self::getImageUrl($request->file('benifit_image'), "upload/case-benifit/") : '';

        $case = new self();
        self::saveBasicInfo($case, $request, $photoUrl, $signatureUrl);
    }

    // Update an existing Case entry
public static function updateCase($request, $id)
{
    $case = self::findOrFail($id);

    // Handle photo
    if ($request->file('project_image')) {
        if (file_exists(public_path($case->project_image))) {
            unlink(public_path($case->project_image));
        }
        $photoUrl = self::getImageUrl($request->file('project_image'), "upload/case-photos/");
    } else {
        $photoUrl = $case->project_image;
    }

    // Handle signature
    if ($request->file('benifit_image')) {
        if (file_exists(public_path($case->benifit_image))) {
            unlink(public_path($case->benifit_image));
        }
        $signatureUrl = self::getImageUrl($request->file('benifit_image'), "upload/case-banifit/");
    } else {
        $signatureUrl = $case->benifit_image;
    }

    // Save basic information
    self::saveBasicInfo($case, $request, $photoUrl, $signatureUrl);
}

    // Save or update basic info in the database
    private static function saveBasicInfo($case, $request, $photoUrl, $signatureUrl)
    {
        $case->case_title       = $request->case_title;
        $case->case_description       = $request->case_description;
        $case->project_title       = $request->project_title;
        $case->project_description       = $request->project_description;
        $case->project_image       = $photoUrl;
        $case->benifit_image   = $signatureUrl;
        $case->benifit_description = $request->benifit_description;
        $case->process_description = $request->process_description;
        $case->save();
    }

       // Delete an Case entry
       public static function deleteCase($case)
       {
           if (file_exists($case->project_image)) {
               unlink($case->project_image);
           }
           if (file_exists($case->benifit_image)) {
               unlink($case->benifit_image);
           }
   
           $case->delete();
       }

}
