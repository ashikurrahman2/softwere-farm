<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
    private static $directory, $pdfUrls;

private static function getPdfUrl($pdfFile, $directory)
{
    $pdfName = hexdec(uniqid()) . '.' . $pdfFile->getClientOriginalExtension();
    $pdfFile->move($directory, $pdfName);
    return $directory . $pdfName;
}

public static function newAplication($request)
{
    self::$directory = "upload/resume/";

    if ($request->hasFile('resume')) {
        self::$pdfUrls = self::getPdfUrl($request->file('resume'), self::$directory);
    } else {
        self::$pdfUrls = null;
    }

    $aplication = new Jobaplication();
    self::saveBasicInfo($aplication, $request, null, self::$pdfUrls);
}

private static function saveBasicInfo($aplication, $request, $pdfUrls)
{
    $aplication->name = $request->name;
    $aplication->email = $request->email;
    $aplication->phone = $request->phone;
    $aplication->cover_letter = $request->cover_letter;
    $aplication->resume = $pdfUrls;
    $aplication->save();
}

}
