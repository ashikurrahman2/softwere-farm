<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Policy extends Model
{
    use HasFactory;

        // Fillable fields to allow mass assignment
        protected $fillable = [
            'policy_title',
            'policy_description',
        ];

    // Create a new FAQ entry
    public static function newPolicy($request)
    {
        $policy = new self();
        self::saveBasicInfo($policy, $request);
    }

    // Update an existing banner entry
    public static function updatePolicy($request, $id)
    {
        $policy = self::findOrFail($id);
        self::saveBasicInfo($policy, $request);
    }

        // Save or update basic info in the database
        private static function saveBasicInfo($policy, $request)
        {
            $policy->policy_title = $request->policy_title;
            $policy->policy_description = $request->policy_description;
            $policy->save();
        }

    // Delete a Policy entry
    public static function deletePolicy($id)
    {
        $policy = self::findOrFail($id);
        $policy->delete();
    }
}
