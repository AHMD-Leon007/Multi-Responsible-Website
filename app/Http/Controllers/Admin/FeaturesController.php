<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;



class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::all();
        return view ('admin.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'logo'      => 'required',
            'title'     => 'required',
            'details'   => 'required'
        ]);

        $feature          = new Feature();
        $feature->logo    = $request->logo;
        $feature->title   = $request->title;
        $feature->details = $request->details;
        $feature->save();

        return redirect()->route('feature.index')->with('successMsg', 'Feature Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::find($id);
        return view ('admin.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'logo'      => 'required',
            'title'     => 'required',
            'details'   => 'required'
        ]);

        $feature          = Feature::find($id);
        $feature->logo    = $request->logo;
        $feature->title   = $request->title;
        $feature->details = $request->details;
        $feature->save();

        return redirect()->route('feature.index')->with('successMsg', 'Feature Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::find($id);

        $feature->delete();
        return redirect()->back()->with('warningMsg', 'Feature Deleted Successfully');
    }
}
