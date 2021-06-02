<?php
namespace App\Http\Controllers;

use App\Models\UserM;
use Illuminate\Http\Request;
use App\Exports\usermanagementsExport;
use Maatwebsite\Excel\Facades\Excel;

class UserMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usermanagements = UserM::latest()->paginate(5);

        return view('usermanagements.index', compact('usermanagements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usermanagements.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            'status' => 'required',
            'role' => 'required'
        ]);

        UserM::create($request->all());

        return redirect()->route('usermanagements.index')
            ->with('success', 'user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserM  $userm
     * @return \Illuminate\Http\Response
     */
    public function show(UserM $userm)
    {
        return view('usermanagements.show', compact('userm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserM  $userm
     * @return \Illuminate\Http\Response
     */
    public function edit(UserM $userm)
    {
        return view('usermanagements.edit', compact('userm'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserM  $userm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserM $userm)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            'status' => 'required',
            'role' => 'required'
        ]);
        $userm->update($request->all());
        return redirect()->route('usermanagements.index')
            ->with('success', 'user updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserM  $userm
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserM $userm)
    {
        $userm->delete();
        return redirect()->route('usermanagements.index')
            ->with('success', 'user deleted successfully');
    }
    public function exportUsermanagements()
     {
        return Excel::download(new usermanagementsExport,'usermanagements.xlsx');
     }
}