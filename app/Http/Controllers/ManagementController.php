<?php
namespace App\Http\Controllers;
use App\Models\Management;
use Illuminate\Http\Request;
use App\Exports\managementsExport;
use Maatwebsite\Excel\Facades\Excel;
class ManagementController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $managements = Management::latest()->paginate(5);

        return view('managements.index', compact('managements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('managements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id'=> 'required',
            'firstname'=> 'required',
            'lastname'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'pincode'=> 'required',
            'country'=> 'required',
            'mobile'=> 'required',
            'payment_method'=> 'required',
            'grand_total'=> 'required',
            'status'=> 'required'
        ]);

        Management::create($request->all());

        return redirect()->route('managements.index')
            ->with('success', 'management created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function show(Management $management)
    {
        return view('managements.show', compact('management'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function edit(Management $management)
    {
        return view('managements.edit', compact('management'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Management $management)
    {
        $request->validate([
            'name' => 'required',
            'introduction' => 'required',
            'location' => 'required',
            'cost' => 'required'
        ]);
        $management->update($request->all());

        return redirect()->route('managements.index')
            ->with('success', 'management updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Management  $management
     * @return \Illuminate\Http\Response
     */
    public function destroy(Management $management)
    {
        $management->delete();

        return redirect()->route('managements.index')
            ->with('success', 'management deleted successfully');
    }
    public function exportManagements()
    {
     return Excel::download(new managementsExport,'managements.xlsx');
    }
}