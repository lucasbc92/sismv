<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SexualOrientation;

class SexualOrientationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = SexualOrientation::all();        
        return $result;
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed()
    {
        $result = SexualOrientation::withTrashed()->orderBy('deleted_at', 'asc')->get();        
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
        $sexual_orientation = new SexualOrientation();

        $sexual_orientation->sexual_orientation_id = $request->sexual_orientation_id;
        $sexual_orientation->sexual_orientation_dsc = $request->sexual_orientation_dsc;

        $sexual_orientation->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sexual_orientation = SexualOrientation::find($id);
        return $sexual_orientation;
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
        $sexual_orientation = SexualOrientation::find($id);
        $sexual_orientation->sexual_orientation_id = $request->sexual_orientation_id;
        $sexual_orientation->sexual_orientation_dsc = $request->sexual_orientation_dsc;
        $sexual_orientation->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sexual_orientation = SexualOrientation::find($id);
        $sexual_orientation->delete();
    }

    public function restore($id)
    {
        $sexual_orientation = SexualOrientation::withTrashed()->find($id);
        $sexual_orientation->restore();
    }
}
