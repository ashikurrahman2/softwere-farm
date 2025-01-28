<?php

namespace App\Http\Controllers\admin;

use App\Models\Team;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
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
            $team = Team::all();
            return DataTables::of($team)
                ->addIndexColumn() 
                ->addColumn('member_image', function ($row) {
                    if ($row->member_image	) {
                        return '<img src="' . asset($row->member_image) . '" alt="banner image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
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
                                <form id="delete-form-' . $row->id . '" action="' . route('team.destroy', $row->id) . '" method="POST" style="display: none;">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                </form>';
                    return $actionbtn;
                })
                ->rawColumns(['member_image', 'action'])
                ->make(true);
        }
        return view('admin.pages.teams.index');
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

            'member_name' => 'required|string|max:255',
            'member_designation' => 'required|string|max:255',
            'social_face' => 'required|string|max:255',
            'social_linked' => 'required|string|max:255',
            'member_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        Team::newTeam($request);
        $this->toastr->success('Team info created successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.pages.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $validated = $request->validate([
            'member_name' => 'required|string|max:255',
            'member_designation' => 'required|string|max:255',
            'social_face' => 'required|string|max:255',
            'social_linked' => 'required|string|max:255',
            'member_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Check if a new image file is uploaded
        if ($request->hasFile('member_image')) {
            // Delete the old image if exists
            if ($team->member_image && file_exists(public_path($team->member_image))) {
                unlink(public_path($team->member_image));
            }
    
            // Upload the new image
            $image = $request->file('member_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/teams/';
            $image->move(public_path($imagePath), $imageName);
    
            // Update the image path
            $team->member_image = $imagePath . $imageName;
        }
    
        // Update the rest of the fields
        $team->update([
            'member_name' => $validated['member_name'],
            'member_designation' => $validated['member_designation'],
            'social_face' => $validated['social_face'],
            'social_linked' => $validated['social_linked'],
        ]);
    
        // Success message
        $this->toastr->success('Team info updated successfully!');
    
        // Redirect back to the index page
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
    
        $this->toastr->success('Team Deleted successfully!');
        return back();
    }
}
