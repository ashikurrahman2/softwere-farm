<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
// use App\Models\page;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $toastr;
    public function __construct(ToastrInterface $toastr)
    {
        // $this->middleware('auth');
        $this->toastr = $toastr;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pages=page::all();
        return view('user.profile');
    }

}
