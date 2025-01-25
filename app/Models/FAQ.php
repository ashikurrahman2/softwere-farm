<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class FAQ extends Model
{

    use HasFactory;

     // Specify the correct table name
     protected $table = 'frequently';

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'question',
        'answer',
    ];

    // Create a new FAQ entry
    public static function newFaq($request)
    {
        $faq = new self();
        self::saveBasicInfo($faq, $request);
    }

    // Update an existing banner entry
    public static function updateFaq($request, $id)
    {
        $faq = self::findOrFail($id);
        self::saveBasicInfo($faq, $request);
    }

    // Save or update basic info in the database
    private static function saveBasicInfo($faq, $request)
    {
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
    }

    // Delete a banner entry
    public static function deleteFaq($id)
    {
        $faq = self::findOrFail($id);
        $faq->delete();
    }
}
