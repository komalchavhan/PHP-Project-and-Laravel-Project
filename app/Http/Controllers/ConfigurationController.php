<?php
namespace App\Http\Controllers;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configurations = Configuration::latest()->paginate(5);
        return view('configurations.index', compact('configurations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configurations.create');
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
            'admin_email' => 'required',
            'notification_email' => 'required'
        ]);
        Configuration::create($request->all());

        return redirect()->route('configurations.index')
            ->with('success', 'configuration created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function show(Configuration $configuration)
    {
        return view('configurations.show', compact('configuration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuration $configuration)
    {
        return view('configurations.edit', compact('configuration'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuration $configuration)
    {
        $request->validate([
            'admin_email' => 'required',
            'notification_email' => 'required'
        ]);
        $configuration->update($request->all());

        return redirect()->route('configurations.index')
            ->with('success', 'configuration updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuration $configuration)
    {
        $configuration->delete();

        return redirect()->route('configurations.index')
            ->with('success', 'configuration deleted successfully');
    }
}