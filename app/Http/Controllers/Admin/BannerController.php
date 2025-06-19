<?php

namespace App\Http\Controllers\admin;

use App\Models\Banner;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class BannerController extends Controller
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
            $banner = Banner::all();
            return DataTables::of($banner)
                ->addIndexColumn() 
                ->addColumn('banner_image', function ($row) {
                    if ($row->banner_image	) {
                        return '<img src="' . asset($row->banner_image) . '" alt="banner image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
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
                                <form id="delete-form-' . $row->id . '" action="' . route('banner.destroy', $row->id) . '" method="POST" style="display: none;">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                </form>';
                    return $actionbtn;
                })
                ->rawColumns(['banner_image', 'action'])
                ->make(true);
        }
        return view('admin.pages.banner.index');
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

            'banner_author' => 'required|string|max:255',
            'banner_description' => 'required|string|max:255',
            'banner_designation' => 'required|string|max:255',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            //  Remove HTML tag
            $request->merge([
                'banner_description' => strip_tags($request->banner_description),
            ]);

        Banner::newBanner($request);
        $this->toastr->success('Banner info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.pages.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'banner_description' => 'required|string|max:255',
            'banner_author' => 'required|string|max:255',
            'banner_designation' => 'required|string|max:255',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Check if a new image file is uploaded
        if ($request->hasFile('banner_image')) {
            // Delete the old image if exists
            if ($banner->banner_image && file_exists(public_path($banner->banner_image))) {
                unlink(public_path($banner->banner_image));
            }
    
            // Upload the new image
            $image = $request->file('banner_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/banners/';
            $image->move(public_path($imagePath), $imageName);
    
            // Update the image path
            $banner->banner_image = $imagePath . $imageName;
        }
    
        // Update the rest of the fields
        $banner->update([
            'banner_author' => $validated['banner_author'],
            'banner_description' => $validated['banner_description'],
        ]);
    
        // Success message
        $this->toastr->success('Banner info updated successfully!');
    
        // Redirect back to the index page
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
    
        $this->toastr->success('Banner Deleted successfully!');
        return back();
    }
}
