<?php
namespace App\Http\Controllers;
use App\Models\Cms;
use Illuminate\Http\Request;
use App\Models\Category;
class CmsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmspages = Cms::latest()->paginate(5);
        return view('cmspages.index', compact('cmspages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cmspages.create');
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
        'title' =>'required',
        'description'=>'required',
        'url'=>'required',
        'status'=>'required'
        ]);
        Cms::create($request->all());

        return redirect()->route('cmspages.index')
            ->with('success', 'cmspages created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cms  $cms
     * @return \Illuminate\Http\Response
     */
    public function show(Cms $cms)
    {
        return view('cmspages.show', compact('cms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cms  $cms
     * @return \Illuminate\Http\Response
     */
    public function edit(Cms $cms)
    {
        return view('cmspages.edit', compact('cms'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cms $cms)
    {
        $request->validate([
            'title' =>'required',
            'description'=>'required',
            'url'=>'required',
            'status'=>'required'
        ]);
        $cms->update($request->all());

        return redirect()->route('cmspages.index')
            ->with('success', 'cmspages updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cms  $cms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cms $cms)
    {
        $cms->delete();

        return redirect()->route('cmspages.index')
            ->with('success', 'cmspages deleted successfully');
    }
   /* public function cmsPage()
    {
     $cmspages = Cms::select('id','title','description','url','status')->get();
     return view('frontends.layouts.index')->with(compact('cmspages'));
    }*/
    public function cmsPage($url=null)
    {
    $cmsPageDetails= Cms::where('url',$url)->first();
    $categories = Category::select('id','name')->get();
     return view('pages.cms_page')->with(compact('cmsPageDetails','categories'));
    }
}