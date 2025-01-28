<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $abouts= About::all();
        $banners= Banner::all();
        return view('frontend.pages.index', compact('abouts', 'banners'));   
    }

    public function Team()
    {
        return view('frontend.pages.team');
    }

    public function Service()
    {
        return view('frontend.pages.service');
    }

    public function ServiceD()
    {
        return view('frontend.pages.service_details');
    }

    public function About(){
        $abouts= About::all();
        return view('frontend.pages.about', compact('abouts'));
    }

    public function Communicate(){
        return view('frontend.pages.contact');
    }

    public function Testi(){
        return view('frontend.pages.testimonial');
    }

    public function Case(){
        return view('frontend.pages.case_details');
    }

    public function FAQ(){
        $faqs= FAQ::all();
        return view('frontend.pages.faq', compact('faqs'));
    }
    
}
