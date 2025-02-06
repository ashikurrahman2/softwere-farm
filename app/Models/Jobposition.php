<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobposition extends Model
{
    use HasFactory;

      // Fillable fields to allow mass assignment
      protected $fillable = [
        'job_title',
        'job_experience',
        'job_location',
    ];

        // Create a new Job position entry
        public static function newPosition($request)
        {
            $position = new self();
            self::saveBasicInfo($position, $request);
        }

            // Update an existing Job position entry
    public static function updatePosition($request, $id)
    {
        $position = self::findOrFail($id);
        self::saveBasicInfo($position, $request);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($position, $request)
    {
        $position->job_title = $request->job_title;
        $position->job_experience = $request->job_experience;
        $position->job_location = $request->job_location;
        $position->save();
    }

       // Delete a Job position entry
       public static function deletePosition($id)
       {
           $position = self::findOrFail($id);
           $position->delete();
       }
}
