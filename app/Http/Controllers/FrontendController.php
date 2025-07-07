<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Ressume;
use App\Models\Skills;
use App\Models\Setting;
use App\Models\User;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FrontendController extends Controller
{

    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index()
    {
       $banners=Banner::all();
       $services=Service::get();
       $ressumes=Ressume::all();
       $skills=Skills::all();
       $settings=Setting::all();
       $web_application_developer7777886 = User::find(1);
        return view('frontend.pages.index', compact('banners', 'web_application_developer7777886', 'settings', 'skills', 'services', 'ressumes'));   
    }


  

 



     
}
