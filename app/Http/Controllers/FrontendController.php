<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Ressume;
use App\Models\About;
use App\Models\Aboutsub;
use App\Models\Skills;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index()
    {
       $banners=Banner::all();
       $abouts=About::all();
       $about = About::first();
       $services=Service::get();
       $ressumes=Ressume::all();
       $skills=Skills::all();
       $settings=Setting::all();
       $web_application_developer7777886 = User::find(1);
       $sub_abouts9097=Aboutsub::all();
        return view('frontend.pages.index', compact('banners', 'sub_abouts9097', 'about', 'abouts', 'web_application_developer7777886', 'settings', 'skills', 'services', 'ressumes'));   
    }


  

 



     
}
