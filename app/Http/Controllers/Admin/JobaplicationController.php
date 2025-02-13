<?php

namespace App\Http\Controllers\admin;

use App\Models\Jobaplication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobaplicationController extends Controller
{

    // Approve loan application
public function approve($id)
{
    $application = Jobaplication::findOrFail($id);

    if ($application->status !== 'pending') {
        return redirect()->route('aplication.index')->with('error', 'This job application cannot be approved.');
    }

    $application->update(['status' => 'approved']);

    return redirect()->route('aplication.index')->with('success', 'Job application approved successfully.');
}

// Reject loan application
public function reject($id)
{
    $application = Jobaplication::findOrFail($id);

    if ($application->status !== 'pending') {
        return redirect()->route('aplication.index')->with('error', 'This loan application cannot be rejected.');
    }

    $application->update(['status' => 'rejected']);

    return redirect()->route('aplication.index')->with('success', 'Loan application rejected successfully.');
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
    public function store(Request $request)
    {
          // Validation rules
          $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:500',
            'cover_letter' => 'required|string|max:255',
           'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Save data to the database
        $applications = Jobaplication::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cover_letter' => $request->cover_letter,
            'resume' =>$pdfUrls,
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Loan application submitted successfully!');
    }

}
