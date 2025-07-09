<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AboutController extends Controller
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
        $about = About::all();
        return DataTables::of($about)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="fa fa-edit"></i>
                              </a>
                              <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                  <i class="fa fa-trash"></i>
                              </button>
                              <form id="delete-form-' . $row->id . '" action="' . route('about.destroy', $row->id) . '" method="POST" style="display: none;">
                                  ' . csrf_field() . '
                                  ' . method_field('DELETE') . '
                              </form>';
                return $actionbtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    return view('admin.pages.about.index');
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
            'spacializedskill_name'       => 'required|string|max:255',
            'total_projects'              => 'required|string|max:255',
        ]);

            //  Remove HTML tag
            $request->merge([
                'experiencesub_title' => strip_tags($request->experiencesub_title),
            ]);
        About::newAbout($request);
        $this->toastr->success('About created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.pages.about.edit', compact('about'));
    }
  /**
 * Update the specified resource in storage.
 */
public function update(Request $request, About $about)
{
    $request->validate([
            'spacializedskill_name'       => 'required|string|max:255',
            'total_projects'               => 'required|integer|max:255',
            'complete_projects'            => 'required|string|max:255',
            'totalclient_reviews'          => 'required|string|max:255',
            'satisfied_clients'            => 'required|string',
            'experience_year'              => 'required|integer',
            'experiencesub_title'          => 'required|string',
    ]);

    // Call updateAbout method and pass the ID
    About::updateAbout($request, $about->id);
    $this->toastr->success('About Updated successfully!');
    return back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();
    
        $this->toastr->success('About Deleted successfully!');
        return back();
    }
}
