<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;

class SettingController extends Controller
{
 
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index()
    {
        $website = setting::first();
        return view('admin.setting.website', compact('website'));
    }

    public function update(Request $request, Setting $website)
    {
     
        Setting::updateSetting($request, $website);

        $this->toastr->success('Setting updated successfully!');
        return back();
    }
}

