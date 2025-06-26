<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Ressume;
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
        return view('frontend.pages.index', compact('banners','services', 'ressumes'));   
    }


  

 



     
}
