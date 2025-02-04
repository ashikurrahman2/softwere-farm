<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Team;
use App\Models\FAQ;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $abouts= About::all();
        $services= Service::all();
        $banners= Banner::all();
        return view('frontend.pages.index', compact('abouts', 'banners','services'));   
    }

    public function Team()
    {
        // Fetch team members with pagination (10 per page)
        $teams = Team::paginate(10);
        return view('frontend.pages.team', compact('teams'));
    }

    public function TeamD($id)
    {
        $team = Team::findOrFail($id);
        return view('frontend.pages.team_details', compact('team'));
    }

    public function Service()
    {
        
        $services = Service::paginate(10);

        return view('frontend.pages.service', compact('services'));
    }

    public function ServiceD($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.pages.service_details', compact('service'));
    }

    public function About(){
        $abouts= About::all();
        return view('frontend.pages.about', compact('abouts'));
    }

    public function Communicate(){
        return view('frontend.pages.contact');
    }


    public function Case(){
        return view('frontend.pages.case_details');
    }

    public function FAQ(){
        $faqs= FAQ::all();
        return view('frontend.pages.faq', compact('faqs'));
    }
    
}
