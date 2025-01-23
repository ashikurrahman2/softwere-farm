<?php

namespace App\Http\Controllers;

// use App\Models\About;
// use App\Models\Banner;
// use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
      
        return view('frontend.pages.index');   
    }

    public function Team()
    {
        return view('frontend.pages.team');
    }

 
}
