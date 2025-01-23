<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
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
            $service = Service::all();
            return DataTables::of($service)
                ->addIndexColumn() 
                ->addColumn('service_icon', function ($row) {
                    if ($row->service_icon	) {
                        return '<img src="' . asset($row->service_icon) . '" alt="rent image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
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
                                <form id="delete-form-' . $row->id . '" action="' . route('service.destroy', $row->id) . '" method="POST" style="display: none;">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                </form>';
                    return $actionbtn;
                })
                ->rawColumns(['service_icon', 'action'])
                ->make(true);
        }
        return view('admin.pages.service.index');
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

            'service_details' => 'required|string|max:255',
            'service_title' => 'required|string|max:255',
            'service_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

              //  Remove HTML tag
              $request->merge([
                'service_details' => strip_tags($request->service_details),
            ]);

            Service::newServices($request);
            $this->toastr->success('Service info created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.pages.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'service_details' => 'required|string|max:255',
            'service_title' => 'required|string|max:255',
            'service_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Check if a new image file is uploaded
        if ($request->hasFile('service_icon')) {
            // Delete the old image if exists
            if ($service->service_icon && file_exists(public_path($service->service_icon))) {
                unlink(public_path($service->service_icon));
            }
    
            // Upload the new image
            $image = $request->file('service_icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/services/';
            $image->move(public_path($imagePath), $imageName);
    
            // Update the image path
            $service->service_icon = $imagePath . $imageName;
        }
    
        // Update the rest of the fields
        $service->update([
            'service_details' => $validated['service_details'],
            'service_title' => $validated['service_title'],
        ]);
    
        // Success message
        $this->toastr->success('Service info updated successfully!');
    
        // Redirect back to the index page
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        $this->toastr->success('Service info Deleted successfully!');
        return back();
    }
}
