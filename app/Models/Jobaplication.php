<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobaplication extends Model
{
    use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'resume',
        'cover_letter',
        'status',
    ];

    // Default value for status
    protected $attributes = [
        'status' => 'pending',
    ];

    private static $directory = "upload/resume/"; // ফাইল স্টোর করার পাথ

    private static function getPdfUrl($pdfFile)
    {
        $directory = public_path(self::$directory);

        // Ensure directory exists
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $pdfName = hexdec(uniqid()) . '.' . $pdfFile->getClientOriginalExtension();
        $pdfFile->move($directory, $pdfName);

        return self::$directory . $pdfName; // Public path সংরক্ষণ নয়, শুধু আপলোড ফোল্ডারের রিলেটিভ পাথ রাখুন
    }

    public static function newAplication($request)
    {
        if ($request->hasFile('resume')) {
            $pdfUrl = self::getPdfUrl($request->file('resume'));
        } else {
            $pdfUrl = null;
        }

        $aplication = new Jobaplication();
        self::saveBasicInfo($aplication, $request, $pdfUrl);
    }

    private static function saveBasicInfo($aplication, $request, $pdfUrl)
    {
        $aplication->name = $request->name;
        $aplication->email = $request->email;
        $aplication->phone = $request->phone;
        $aplication->cover_letter = $request->cover_letter;
        $aplication->resume = $pdfUrl;
        $aplication->save();
    }
}
