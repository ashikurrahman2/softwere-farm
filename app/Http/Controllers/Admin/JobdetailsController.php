<?php

namespace App\Http\Controllers\admin;

use App\Models\Jobdetails;
use App\Http\Controllers\Controller;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JobdetailsController extends Controller
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $job = Jobdetails::all();
            return DataTables::of($job)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form id="delete-form-' . $row->id . '" action="' . route('details.destroy', $row->id) . '" method="POST" style="display: none;">
                                      ' . csrf_field() . '
                                      ' . method_field('DELETE') . '
                                  </form>';
                    return $actionbtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.jobdetails.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_overview'          => 'required|string|max:255',
            'job_responsibilities'    => 'required|string',
            'job_requirements'    => 'required|string',
            'offered'    => 'required|string',
            'job_deadline'    => 'required|date',
            'job_salary'    => 'required|string',
        ]);
            //  Remove HTML tag
            $request->merge([
                'job_overview'         => strip_tags($request->job_overview),
                'job_responsibilities' => strip_tags($request->job_responsibilities),
                'job_requirements'     => strip_tags($request->job_requirements),
                'offered'              => strip_tags($request->offered),
            ]);

            Jobdetails::newDetails($request);
            $this->toastr->success('Job details info created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobdetails $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Jobdetails::findOrFail($id);
        return view('admin.pages.jobdetails.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_overview'         => 'required|string',
            'job_responsibilities' => 'required|string',
            'job_requirements'     => 'required|string',
            'offered'              => 'required|string',
            'job_deadline'         => 'required|date',
            'job_salary'           => 'required|string',
        ]);

        Jobdetails::updateDetails($request, $id);
        $this->toastr->success('Job Details info updated successfully!');
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $job = Jobdetails::findOrFail($id);
        $job->delete();
        // Success message
        $this->toastr->success('Job details info Deleted successfully!');
        return back();
    }
}
