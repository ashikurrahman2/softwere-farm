<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PolicyController extends Controller
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
            $policy = Policy::all();
            return DataTables::of($policy)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form id="delete-form-' . $row->id . '" action="' . route('policy.destroy', $row->id) . '" method="POST" style="display: none;">
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
            'policy_title'          => 'required|string|max:255',
            'policy_description'    => 'required|string',
        ]);
            //  Remove HTML tag
            $request->merge([
                'policy_description' => strip_tags($request->policy_description),
            ]);

            Policy::newPolicy($request);
            $this->toastr->success('Policy info created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Policy $policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $policy = Policy::findOrFail($id);
        return view('admin.pages.policy.edit', compact('policy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Policy $policy)
    {
        $request->validate([
            'policy_title'         => 'required|string|max:255',
            'policy_description'   => 'required|string',
        ]);
    
        // Update the FAQ record using validated data
        $policy->update([
            'policy_title'         => $request->policy_title,
            'policy_description'   => $request->policy_description,
        ]);
    
        $this->toastr->success('Policy updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $policy = Policy::findOrFail($id);
        $policy->delete();
    
        $this->toastr->success('Policy info Deleted successfully!');
        return back();
    }
}
