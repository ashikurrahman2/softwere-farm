<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Term extends Model
{
    use HasFactory;

    protected $fillable = [
        'terms_image',
        'title',
        'description',
    ];

    private static $image, $imageName, $directory, $imageUrl;

    // Function to upload and resize image
    private static function getImageUrl($request)
    {
        self::$image = $request->file('terms_image');
        if (self::$image) {
            self::$imageName = time() . '_' . self::$image->getClientOriginalName(); // Unique image name
            self::$directory = "upload/terms/";
            self::$image->move(self::$directory, self::$imageName);

            // Resize the image using Intervention Image
            $imageManager = new ImageManager(new Driver());
            $image = $imageManager->read(self::$directory . self::$imageName);
            $image->resize(500, 500)->save(self::$directory . self::$imageName);

            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }
        return null;
    }

    // Create a new Term entry
    public static function newTerm($request)
    {
        self::$imageUrl = $request->file('terms_image') ? self::getImageUrl($request) : '';

        $term = new self();
        self::saveBasicInfo($term, $request, self::$imageUrl);
    }

                      // Update an existing About entry
                      public static function updateTerm($request, $id)
                      {
                      // Fetch the team record using the ID
                      $term = self::findOrFail($id);
                  
                          if ($request->file('terms_image')) {
                              if (file_exists($term->terms_image)) {
                              unlink($term->terms_image);
                              }
                          self::$imageUrl = self::getImageUrl($request);
                          } else {
                          self::$imageUrl = $term->terms_image;
                      }
                  
                      self::saveBasicInfo($term, $request, self::$imageUrl);
                          }
                  
                            // Save or update basic info in the database
                     private static function saveBasicInfo($term, $request, $imageUrl)
                     {
                         $term->terms_image             = $imageUrl;
                         $term->title                   = $request->title;
                         $term->description             = $request->description;
                         $term->save();
                     }

    // Delete a Term entry
    public static function deleteTerm(Term $term)
    {
        if (file_exists($term->terms_image)) {
            unlink($term->terms_image);
        }
        $term->delete();
    }
}


