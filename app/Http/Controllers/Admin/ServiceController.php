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

                    // Show service_icon as image
                    ->addColumn('service_icon', function ($row) {
                        if ($row->service_icon) {
                            return '<img src="' . asset($row->service_icon) . '" alt="Icon" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
                        } else {
                            return '<span class="text-muted">No icon</span>';
                        }
                    })

                    // Show service_image as image
                    ->addColumn('service_image', function ($row) {
                        if ($row->service_image) {
                            return '<img src="' . asset($row->service_image) . '" alt="Image" class="img-fluid center-image" style="max-width: 60px; display: block; margin: 0 auto;">';
                        } else {
                            return '<span class="text-muted">No image</span>';
                        }
                    })

                    // Action buttons
                    ->addColumn('action', function ($row) {
                        $editBtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="fa fa-edit"></i>
                                    </a>';

                        $deleteBtn = '<button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <form id="delete-form-' . $row->id . '" action="' . route('service.destroy', $row->id) . '" method="POST" style="display: none;">
                                        ' . csrf_field() . method_field('DELETE') . '
                                    </form>';

                        return $editBtn . $deleteBtn;
                    })

                    // Important: mark these columns as raw HTML
                    ->rawColumns(['service_icon', 'service_image', 'action'])
                    ->make(true);
            }

            return view('admin.pages.service.index');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_title'      => 'required|string|max:255',
            'service_subtitle'   => 'required|string|max:255',
            'service_details'    => 'required|string|max:255',
            'service_category'   => 'required|string|max:255',
            'service_icon'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Remove HTML tags (security)
        $request->merge([
            'service_title'     => strip_tags($request->service_title),
            'service_subtitle'  => strip_tags($request->service_subtitle),
            'service_details'   => strip_tags($request->service_details),
            'service_category'  => strip_tags($request->service_category),
        ]);

        // Call Model static method to store
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
     $request->validate([
            'service_title'      => 'required|string|max:255',
            'service_subtitle'   => 'required|string|max:255',
            'service_details'    => 'required|string|max:255',
            'service_category'   => 'required|string|max:255',
            'service_icon'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'service_image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Fetch data
        Service::updateServices($request, $service->id);
        $this->toastr->success('Service info updated successfully!');
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
