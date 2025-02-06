<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Team extends Model
{
    
    use HasFactory;
    private static $image, $imageName, $directory, $imageUrl;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'member_name',
        'member_designation',
        'member_image',
        'social_face',
        'social_linked',
        'member_email',
        'member_phone',
        'member_experience',
        'member_address',
        'biography',
        'member_skills',
    ];

    protected $casts = [
        'member_skills' => 'array', // Laravel নিজেই এটি অ্যারে হিসেবে সংরক্ষণ করবে
    ];
    

            // Function to upload and resize image
private static function getImageUrl($request)
{
    self::$image = $request->file('member_image');
    if (self::$image) {
        self::$imageName = time() . '_' . self::$image->getClientOriginalName(); // Unique image name
        self::$directory = "upload/teams/";
        self::$image->move(self::$directory, self::$imageName);

        // Resize the image using Intervention Image
        $imageManager = new ImageManager(new Driver());
        $image = $imageManager->read(self::$directory . self::$imageName);
        $image->resize(500, 500); // Resize to required dimensions
        $image->save(self::$directory . self::$imageName);

        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    return null;
    }

        // Create a new Rent entry
        public static function newTeam($request)
        {
            self::$imageUrl = $request->file('member_image') ? self::getImageUrl($request) : '';
    
            $team = new self();
            self::saveBasicInfo($team, $request, self::$imageUrl);
        }

                  // Update an existing About entry
    public static function updateTeam($request, $id)
    {
    // Fetch the team record using the ID
    $team = self::findOrFail($id);

        if ($request->file('member_image')) {
            if (file_exists($team->member_image)) {
            unlink($team->member_image);
            }
        self::$imageUrl = self::getImageUrl($request);
        } else {
        self::$imageUrl = $team->member_image;
    }

    self::saveBasicInfo($team, $request, self::$imageUrl);
        }

          // Save or update basic info in the database
   private static function saveBasicInfo($team, $request, $imageUrl)
   {
       $team->member_image             = $imageUrl;
       $team->member_name              = $request->member_name;
       $team->member_designation       = $request->member_designation;
       $team->social_face              = $request->social_face;
       $team->social_linked            = $request->social_linked;
       $team->member_email             = $request->member_email;
       $team->member_phone             = $request->member_phone;
       $team->member_experience        = $request->member_experience;
       $team->member_address           = $request->member_address;
       $team->biography                = $request->biography;
    // Multiple skills store as comma-separated values
       $team->member_skills = implode(',', $request->member_skills);
       $team->save();
   }

      // Delete an Rent entry
public static function deleteTeam($team)
{
    if (file_exists($team->member_image)) {
        unlink($team->member_image);
    }
    
    $team->delete();

    }
}
