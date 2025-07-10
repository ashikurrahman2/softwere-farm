<?php

namespace App\Http\Controllers\admin;

use App\Models\Portfolio;
use Flasher\Toastr\Prime\ToastrInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
// use Yajra\DataTables\Facades\DataTables;

class PortfolioController extends Controller
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
            $portfolio = Portfolio::all();
            return DataTables::of($portfolio)
                ->addIndexColumn() 
                ->addColumn('portfolio_image', function ($row) {
                    if ($row->portfolio_image) {
                        return '<img src="' . asset($row->portfolio_image) . '" alt="portfolio image" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
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
                                <form id="delete-form-' . $row->id . '" action="' . route('portfolio.destroy', $row->id) . '" method="POST" style="display: none;">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                </form>';
                    return $actionbtn;
                })
                ->rawColumns(['portfolio_image', 'action'])
                ->make(true);
        }
        return view('admin.pages.portfolio.index');
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
            'external_link'    => 'required|string|max:255',
            'category'         => 'required|string|max:255',
            'title'            => 'required|string|max:255',
            'portfolio_image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

            // Fetch Data
             Portfolio::newPortfolio($request);
            $this->toastr->success('Portfolio info created successfully!');
            return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
          $portfolio = Portfolio::findOrFail($id);
        return view('admin.pages.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
          // Validation data
             $request->validate([
            'external_link'    => 'required|string|max:255',
            'category'         => 'required|string|max:255',
            'title'            => 'required|string|max:255',
            'portfolio_image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            // Fetch data
        Portfolio::updatePortfolio($request, $portfolio->id);
        $this->toastr->success('Portfolio info updated successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        $this->toastr->success('Portfolio info Deleted successfully!');
        return back();
    }
}
