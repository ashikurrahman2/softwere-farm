<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SkillController extends Controller
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
            $skill = Skills::all();
            return DataTables::of($skill)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form id="delete-form-' . $row->id . '" action="' . route('skills.destroy', $row->id) . '" method="POST" style="display: none;">
                                      ' . csrf_field() . '
                                      ' . method_field('DELETE') . '
                                  </form>';
                    return $actionbtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pages.faq.index');
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
        // Validation data
              $request->validate([
            'skill_name'            => 'required|string|max:255',
            'skill_description'     => 'required|string',
            'skill_percentage'      => 'required|string',
            'skill_basename'        => 'required|string',
        ]);
            //  Remove HTML tag
            $request->merge([
                'skill_description' => strip_tags($request->skill_description),
            ]);
            // Fetch data
            Skills::newSkill($request);
            $this->toastr->success('Skills info created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Skills $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skills $skill)
    {
         // Validation data
              $request->validate([
            'skill_name'            => 'required|string|max:255',
            'skill_description'     => 'required|string',
            'skill_percentage'      => 'required|string',
            'skill_basename'        => 'required|string',
        ]);

           // Fetch data
        Skills::updateSkill($request, $skill->id);
        $this->toastr->success('Skills info updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
           $skill = Skills::findOrFail($id);
        $skill->delete();
        $this->toastr->success('Skills info Deleted successfully!');
        return back();
    }
}
