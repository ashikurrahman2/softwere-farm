<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aboutsub extends Model
{
        use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'complete_projects',
        'totalclient_reviews',
        'satisfied_clients',
        'experience_year',
        'experiencesub_title',
    ];

    // Create a new About entry
    public static function newSubAbout($request)
    {
        $sub_about = new self();
        self::saveBasicInfo($sub_about, $request);
    }

    // Update an existing About entry
    public static function updateSubAbout($request, $id)
    {
        $sub_about = self::findOrFail($id);
        self::saveBasicInfo($sub_about, $request);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($sub_about, $request)
    {
        $sub_about->complete_projects           = $request->complete_projects;
        $sub_about->totalclient_reviews         = $request->totalclient_reviews;
        $sub_about->satisfied_clients           = $request->satisfied_clients;
        $sub_about->experience_year             = $request->experience_year;
        $sub_about->experiencesub_title         = $request->experiencesub_title;
        $sub_about->save();
    }

    // Delete a About entry
    public static function deleteSubAbout($id)
    {
        $sub_about = self::findOrFail($id);
        $sub_about->delete();
    }
}
