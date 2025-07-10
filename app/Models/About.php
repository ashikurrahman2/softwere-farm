<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'spacializedskill_name',
        'total_projects',
    ];

    // Create a new About entry
    public static function newAbout($request)
    {
        $about = new self();
        self::saveBasicInfo($about, $request);
    }

    // Update an existing About entry
    public static function updateAbout($request, $id)
    {
        $about = self::findOrFail($id);
        self::saveBasicInfo($about, $request);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($about, $request)
    {
        $about->spacializedskill_name       = $request->spacializedskill_name;
        $about->total_projects              = $request->total_projects;
        $about->save();
    }

    // Delete a About entry
    public static function deleteAbout($id)
    {
        $about = self::findOrFail($id);
        $about->delete();
    }
}
