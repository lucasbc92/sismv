<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\FeminicideHasChildren;

class FeminicideHasChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = FeminicideHasChildren::all();        
        return $result;
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed()
    {
        $result = FeminicideHasChildren::withTrashed()->orderBy('deleted_at', 'asc')->get();        
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feminicide_has_children = new FeminicideHasChildren();

        $feminicide_has_children->feminicide_has_children_id = $request->feminicide_has_children_id;
        $feminicide_has_children->feminicide_has_children_dsc = $request->feminicide_has_children_dsc;

        $feminicide_has_children->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feminicide_has_children = FeminicideHasChildren::find($id);
        return $feminicide_has_children;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $feminicide_has_children = FeminicideHasChildren::find($id);
        $feminicide_has_children->feminicide_has_children_id = $request->feminicide_has_children_id;
        $feminicide_has_children->feminicide_has_children_dsc = $request->feminicide_has_children_dsc;
        $feminicide_has_children->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feminicide_has_children = FeminicideHasChildren::find($id);
        $feminicide_has_children->delete();
    }

    public function restore($id)
    {
        $feminicide_has_children = FeminicideHasChildren::withTrashed()->find($id);
        $feminicide_has_children->restore();
    }
}
