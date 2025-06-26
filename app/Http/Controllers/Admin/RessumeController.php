<?php

namespace App\Http\Controllers\admin;

use App\Models\Ressume;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RessumeController extends Controller
{
//   Tostr massage calling
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
            $ressume = Ressume::all();
            return DataTables::of($ressume)
                ->addIndexColumn() 
                ->addColumn('job_image', function ($row) {
                    if ($row->job_image	) {
                        return '<img src="' . asset($row->job_image) . '" alt="job image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
                    } else {
                        return 'No logo uploaded';
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                    <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                <form id="delete-form-' . $row->id . '" action="' . route('ressume.destroy', $row->id) . '" method="POST" style="display: none;">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                </form>';
                    return $actionbtn;
                })
                ->rawColumns(['job_image', 'action'])
                ->make(true);
        }
        return view('admin.pages.ressume.index');
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

            'edu_degree' => 'required|string|max:255',
            'pass_year' => 'required|string|max:255',
            'pass_recommand' => 'required|string|max:255',
            'job_organization' => 'required|string|max:255',
            'job_designation' => 'required|string|max:255',
            'job_summary' => 'required|string|max:255',
            'job_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            //  Remove HTML tag
            $request->merge([
                'job_summary' => strip_tags($request->job_summary),
                'pass_recommand' => strip_tags($request->pass_recommand),
            ]);

        Ressume::newRessume($request);
        $this->toastr->success('Ressume info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Ressume $ressume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
          $ressume = Ressume::findOrFail($id);
        return view('admin.pages.ressume.edit', compact('ressume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ressume $ressume)
    {
               $request->validate([

            'edu_degree' => 'required|string|max:255',
            'pass_year' => 'required|string|max:255',
            'pass_recommand' => 'required|string|max:255',
            'job_organization' => 'required|string|max:255',
            'job_designation' => 'required|string|max:255',
            'job_summary' => 'required|string|max:255',
            'job_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

          // Fetch data
        Ressume::updateRessume($request, $ressume->id);
        $this->toastr->success('Ressume info updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ressume = Ressume::findOrFail($id);
        $ressume->delete();
        $this->toastr->success('Ressume info Deleted successfully!');
        return back();
    }
}
