<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jobposition;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JobpositionController extends Controller
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
            $position = Jobposition::all();
            return DataTables::of($position)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form id="delete-form-' . $row->id . '" action="' . route('position.destroy', $row->id) . '" method="POST" style="display: none;">
                                      ' . csrf_field() . '
                                      ' . method_field('DELETE') . '
                                  </form>';
                    return $actionbtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.policy.index');
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
            'job_title'          => 'required|string|max:255',
            'job_location'          => 'required|string|max:255',
            'job_experience'    => 'required|integer',
        ]);
        
            Jobposition::newPosition($request);
            $this->toastr->success('Job info created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobposition $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $position = Jobposition::findOrFail($id);
        return view('admin.pages.faq.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jobposition $position)
    {
        $request->validate([
            'job_title'          => 'required|string|max:255',
            'job_location'       => 'required|string|max:255',
            'job_experience'     => 'required|integer',
        ]);
    
        // Update the FAQ record using validated data
        $policy->update([
            'job_title'         => $request->job_title,
            'job_location'   => $request->job_location,
            'job_experience'   => $request->job_experience,
        ]);
    
        $this->toastr->success('Job info updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $position = Jobposition::findOrFail($id);
        $position->delete();
    
        $this->toastr->success('Job info Deleted successfully!');
        return back();
    }
}
