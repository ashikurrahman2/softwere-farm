<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Team;
use App\Models\Term;
use App\Models\FAQ;
use App\Models\Service;
use App\Models\Policy;
use App\Models\Jobposition;
use App\Models\Jobdetails;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function Terms(){
        $terms=Term::all();
        return view('frontend.pages.tearms_condition', compact('terms'));
    }

    public function Policy(){
        $policies=Policy::all();
        return view('frontend.pages.privacy_policy', compact('policies'));
    }
    
    public function Career() {
        // Job positions ডেটা নিয়ে আসা
        $positions = Jobposition::all();
    
        foreach ($positions as $position) {
            // যদি job_deadline ফিল্ড `NULL` হয়, তাহলে ডিফল্ট ৭ দিনের সময় সেট করুন
            $position->deadline_timestamp = $position->job_deadline 
                ? strtotime($position->job_deadline)
                : strtotime('+7 days');
        }
    
        return view('frontend.pages.career', compact('positions'));
    }
    
    
    public function CareerD($id){
        $job = Jobdetails::findOrFail($id);
        $position=Jobposition::findOrFail($id); // সঠিক findOrFail() ব্যবহার করা হয়েছে
        return view('frontend.pages.job_details', compact('job','position'));
    }
    
    
    
}
