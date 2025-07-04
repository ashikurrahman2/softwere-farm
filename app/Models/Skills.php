<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    //Hasfactory class
      use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'skill_name',
        'skill_description',
        'skill_percentage',
        'skill_basename',
    ];

    // Create a new Skill entry
    public static function newSkill($request)
    {
        $skill = new self();
        self::saveBasicInfo($skill, $request);
    }

    // Update an existing Skii entry
    public static function updateSkill($request, $id)
    {
        $skill = self::findOrFail($id);
        self::saveBasicInfo($skill, $request);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($skill, $request)
    {
        $skill->skill_name              = $request->skill_name;
        $skill->skill_description       = $request->skill_description;
        $skill->skill_percentage        = $request->skill_percentage;
        $skill->skill_basename          = $request->skill_basename;
        $skill->save();
    }

    // Delete a Skill entry
    public static function deleteSkill($id)
    {
        $skill = self::findOrFail($id);
        $skill->delete();
    }
}
