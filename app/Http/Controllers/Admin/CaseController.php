<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CaseController extends Controller
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
            $case = Cases::all();
            return DataTables::of($case)
                ->addIndexColumn()
                ->addColumn('project_image', function ($row) {
                    if ($row->project_image) {
                        return '<img src="' . asset($row->project_image) . '" alt="project_image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
                    } else {
                        return 'No project_image uploaded';
                    }
                })
                ->addColumn('benifit_image', function ($row) {
                    if ($row->benifit_image) {
                        return '<img src="' . asset($row->benifit_image) . '" alt="benifit_image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
                    } else {
                        return 'No benifit_image uploaded';
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form id="delete-form-' . $row->id . '" action="' . route('case.destroy', $row->id) . '" method="POST" style="display: none;">
                                      ' . csrf_field() . '
                                      ' . method_field('DELETE') . '
                                  </form>';
                    return $actionbtn;
                })
                ->rawColumns(['project_image', 'benifit_image', 'action'])
                ->make(true);
        }
        return view('admin.pages.case.index');
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

            'case_title' => 'required|string|max:255',
            'project_title' => 'required|string|max:255',
            'case_description' => 'required|string|max:255',
            'project_description' => 'required|string|max:255',
            'benifit_description' => 'required|string|max:255',
            'process_description' => 'required|string|max:255',
            'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'benifit_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

              //  Remove HTML tag
              $request->merge([
                'process_description' => strip_tags($request->process_description),
                'benifit_description' => strip_tags($request->benifit_description),
                'project_description' => strip_tags($request->project_description),
                'case_description'    => strip_tags($request->case_description),
            ]);

            Cases::newCase($request);
            $this->toastr->success('Case info created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Cases $case)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $case = Cases::findOrFail($id);
        return view('admin.pages.case.edit', compact('case'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cases $case)
    {
        $request->validate([

            'case_title' => 'required|string|max:255',
            'project_title' => 'required|string|max:255',
            'case_description' => 'required|string|max:255',
            'project_description' => 'required|string|max:255',
            'benifit_description' => 'required|string|max:255',
            'process_description' => 'required|string|max:255',
            'project_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'benifit_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Call updateAbout method and pass the ID
    Cases::updateCase($request, $case->id);
    $this->toastr->success('Case Updated successfully!');
    return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $case = Cases::findOrFail($id);
        $case->delete();
        $this->toastr->success('Case info Deleted successfully!');
        return back();
    }
}
