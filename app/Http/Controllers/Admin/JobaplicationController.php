<?php

namespace App\Http\Controllers\admin;

use App\Models\Jobaplication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Flasher\Toastr\Prime\ToastrInterface;
// use Illuminate\Support\Facades\Response;
// use Illuminate\Support\Facades\Storage;

class JobaplicationController extends Controller
{
    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }
    // Joined application
public function approve($id)
{
    $application = Jobaplication::findOrFail($id);

    if ($application->status !== 'pending') {
        return redirect()->route('aplication.index')->with('error', 'This job application cannot be approved.');
    }

    $application->update(['status' => 'approved']);
    
    $this->toastr->success('Job application approved successfully.');

    return redirect()->route('aplication.index');
}
// Reject loan application
public function reject($id)
{
    $application = Jobaplication::findOrFail($id);

    if ($application->status !== 'pending') {
        return redirect()->route('aplication.index')->with('error', 'This job application cannot be rejected.');
    }

    $application->update(['status' => 'rejected']);

   $this->toastr->success('Job application Rejected successfully.');

    return redirect()->route('aplication.index');
}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Jobaplication::all();
        return view('admin.pages.jobaplication.index', compact('applications'));
    }



    /**
     * Store a newly created resource in storage.
     */
 // Store Job Application
 public function store(Request $request)
 {
     $validator = Validator::make($request->all(), [
         'name' => 'required|string|max:255',
         'email' => 'required|string|max:255',
         'phone' => 'required|string|max:20',
         'cover_letter' => 'required|string|max:1000',
         'resume' => 'required|mimes:pdf,doc,docx|max:2048',
     ]);

     if ($validator->fails()) {
         return back()->withErrors($validator)->withInput();
     }

     // Handle resume file upload
     if ($request->hasFile('resume')) {
         $pdfName = hexdec(uniqid()) . '.' . $request->file('resume')->getClientOriginalExtension();
         $directory = public_path('upload/resume');

         // Ensure directory exists
         if (!file_exists($directory)) {
             mkdir($directory, 0777, true);
         }

         $request->file('resume')->move($directory, $pdfName);
         $pdfUrl = 'upload/resume/' . $pdfName;
     } else {
         $pdfUrl = null;
     }

     // Save data to the database
     Jobaplication::create([
         'name' => $request->name,
         'email' => $request->email,
         'phone' => $request->phone,
         'cover_letter' => $request->cover_letter,
         'resume' => $pdfUrl,
     ]);

     return redirect()->back()->with('success', 'Job application submitted successfully!');
 }

 // Download Resume
 public function downloadResume($id)
 {
     $application = Jobaplication::findOrFail($id);
     $filePath = public_path($application->resume); // ফাইল পাথ সেট

     if ($application->resume && file_exists($filePath)) {
         return response()->download($filePath);
     }

     return back()->with('error', 'Resume file not found.');
 }
    
    

    
    
    

}
