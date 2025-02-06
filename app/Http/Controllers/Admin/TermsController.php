<?php

namespace App\Http\Controllers\admin;

use App\Models\Term;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TermsController extends Controller
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
            $terms = Term::all();
            return DataTables::of($terms)
                ->addIndexColumn() 
                ->addColumn('terms_image', function ($row) {
                    if ($row->terms_image	) {
                        return '<img src="' . asset($row->terms_image) . '" alt="banner image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
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
                                <form id="delete-form-' . $row->id . '" action="' . route('terms.destroy', $row->id) . '" method="POST" style="display: none;">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                </form>';
                    return $actionbtn;
                })
                ->rawColumns(['terms_image', 'action'])
                ->make(true);
        }
        return view('admin.pages.terms.index');
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
            'description' => 'required|string|max:800',
            'title' => 'required|string|max:255',
            'terms_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //  Remove HTML tag
        $request->merge([
            'description' => strip_tags($request->description),
          
        ]);
        // Retrive data and success message 
        Term::newTerm($request);
        $this->toastr->success('Terms info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Term $terms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $terms = Term::findOrFail($id);
        return view('admin.pages.terms.edit', compact('terms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find Term
        $terms = Term::findOrFail($id);
    
        // Validate input fields
        $validated = $request->validate([
            'description' => 'required|string|max:800',
            'title' => 'required|string|max:255',
            'terms_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Check if a new image file is uploaded
        if ($request->hasFile('terms_image')) {
            if (!empty($terms->terms_image) && file_exists(public_path($terms->terms_image))) {
                unlink(public_path($terms->terms_image));
            }
    
            // Upload the new image
            $image = $request->file('terms_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/terms/';
            $image->move(public_path($imagePath), $imageName);
    
            // Assign the new image path
            $terms->terms_image = $imagePath . $imageName;
        }
    
        // Update the rest of the fields
        $terms->description = $validated['description'];
        $terms->title = $validated['title'];
    
        // Save the updated data (ONLY UPDATES, NO NEW ENTRY)
        $terms->save();
        // Success message
        $this->toastr->success('Terms info updated successfully!');
        return back();
    }
      

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $terms = Term::findOrFail($id);
        $terms->delete();
        // Success message
        $this->toastr->success('Terms info Deleted successfully!');
        return back();
    }
}
