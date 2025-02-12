<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jobdetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_overview',
        'job_responsibilities',
        'job_requirements',
        'offered',
        'job_deadline',
        'job_salary',
    ];

    // Create a new Job Details entry
    public static function newDetails($request)
    {
        $job = new self();
        self::saveBasicInfo($job, $request);
    }

    // Update an existing Job Details entry
    public static function updateDetails($request, $id)
    {
        $job = self::findOrFail($id);
        self::saveBasicInfo($job, $request);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($job, $request)
    {
        $job->job_overview         = $request->job_overview;
        $job->job_responsibilities = $request->job_responsibilities;
        $job->job_requirements     = $request->job_requirements;
        $job->offered              = $request->offered;
        $job->job_deadline         = $request->job_deadline;
        $job->job_salary           = $request->job_salary;
        $job->save();
    }

    // Delete a Job Details entry
    public static function deleteDetails($id)
    {
        $job = self::findOrFail($id);
        $job->delete();
    }
}
