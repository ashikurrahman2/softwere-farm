<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutsub;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SubAboutController extends Controller
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
                $sub_about = Aboutsub::all();
                return DataTables::of($sub_about)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <form id="delete-form-' . $row->id . '" action="' . route('subabout.destroy', $row->id) . '" method="POST" style="display: none;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                    </form>';
                        return $actionbtn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('admin.pages.subabout.index');
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
           'complete_projects'           => 'string|max:255',
            'totalclient_reviews'         => 'string|max:255',
            'satisfied_clients'           => 'string|max:255',
            'experience_year'             => 'integer|max:255',
            'experiencesub_title'         => 'string|max:255',
        ]);

         //  Remove HTML tag
            $request->merge([
                'experiencesub_title' => strip_tags($request->experiencesub_title),
        ]);

          Aboutsub::newSubAbout($request);
        $this->toastr->success('Sub About created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Aboutsub $sub_about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
          $sub_about = Aboutsub::findOrFail($id);
        return view('admin.pages.subabout.edit', compact('sub_about'));
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, Aboutsub $sub_about)
{
    $request->validate([
        'complete_projects'       => 'required|string|max:255',
        'totalclient_reviews'     => 'required|string|max:255',
        'satisfied_clients'       => 'required|string|max:255',
        'experience_year'         => 'required|integer|max:255',
        'experiencesub_title'     => 'required|string|max:255',
    ]);

    // Update data
    Aboutsub::updateSubAbout($request, $sub_about->id);

    $this->toastr->success('Sub About Updated successfully!');
    return back();
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sub_about = Aboutsub::findOrFail($id);
        $sub_about->delete();
    
        $this->toastr->success('Sub About Deleted successfully!');
        return back();
    }
}
