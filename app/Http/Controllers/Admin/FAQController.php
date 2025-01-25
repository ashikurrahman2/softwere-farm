<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FAQController extends Controller
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
            $faq = FAQ::all();
            return DataTables::of($faq)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionbtn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form id="delete-form-' . $row->id . '" action="' . route('faq.destroy', $row->id) . '" method="POST" style="display: none;">
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
        $request->validate([
            'question'  => 'required|string|max:255',
            'answer'    => 'required|string',
        ]);
            //  Remove HTML tag
            $request->merge([
                'answer' => strip_tags($request->answer),
            ]);

            FAQ::newFaq($request);
            $this->toastr->success('FAQ created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(FAQ $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('admin.pages.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQ $faq)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer'   => 'required|string',
        ]);
    
        // Update the FAQ record using validated data
        $faq->update([
            'question' => $request->question,
            'answer'   => $request->answer,
        ]);
    
        $this->toastr->success('FAQ updated successfully!');
        return back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();
    
        $this->toastr->success('FAQ Deleted successfully!');
        return back();
    }
}
