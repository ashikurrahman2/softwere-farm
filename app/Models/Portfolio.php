<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Portfolio extends Model
{
     use HasFactory;

    private static $image, $imageName, $directory, $imageUrl;

    // Fillable fields to allow mass assignment
      protected $fillable = [
        'title', 'category', 'portfolio_image', 'external_link',
    ];

    // Function to upload and resize image
    private static function getImageUrl($request)
    {
        self::$image = $request->file('portfolio_image');
        if (self::$image) {
            self::$imageName = time() . '_' . self::$image->getClientOriginalName();
            self::$directory = "upload/portfolio/";
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
    public static function newPortfolio($request)
    {
        self::$imageUrl = $request->file('portfolio_image') ? self::getImageUrl($request) : '';

        $portfolio = new self();
        self::saveBasicInfo($portfolio, $request, self::$imageUrl);
    }

    // Update an existing Resume entry
    public static function updatePortfolio($request, $id)
    {
        $portfolio = self::findOrFail($id);

        if ($request->file('portfolio_image')) {
            if (file_exists($portfolio->portfolio_image)) {
                unlink($portfolio->portfolio_image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $portfolio->portfolio_image;
        }

        self::saveBasicInfo($portfolio, $request, self::$imageUrl);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($portfolio, $request, $imageUrl)
    {
        $portfolio->portfolio_image             = $imageUrl;
        $portfolio->title                       = $request->title;
        $portfolio->category                    = $request->category;
        $portfolio->external_link               = $request->external_link;
        $portfolio->save();
    }

    // Delete a Resume entry
    public static function deletePortfolio($portfolio)
    {
        if (file_exists($portfolio->portfolio_image)) {
            unlink($portfolio->portfolio_image);
        }

        $portfolio->delete();
    }
}
