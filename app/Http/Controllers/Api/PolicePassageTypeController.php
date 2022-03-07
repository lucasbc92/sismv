<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PolicePassageType;

class PolicePassageTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = PolicePassageType::all();        
        return $result;
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed()
    {
        $result = PolicePassageType::withTrashed()->orderBy('deleted_at', 'asc')->get();        
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
        $police_passage_type = new PolicePassageType();

        $police_passage_type->police_passage_type_id = $request->police_passage_type_id;
        $police_passage_type->police_passage_type_dsc = $request->police_passage_type_dsc;

        $police_passage_type->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $police_passage_type = PolicePassageType::find($id);
        return $police_passage_type;
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
        $police_passage_type = PolicePassageType::find($id);
        $police_passage_type->police_passage_type_id = $request->police_passage_type_id;
        $police_passage_type->police_passage_type_dsc = $request->police_passage_type_dsc;
        $police_passage_type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $police_passage_type = PolicePassageType::find($id);
        $police_passage_type->delete();
    }

    public function restore($id)
    {
        $police_passage_type = PolicePassageType::withTrashed()->find($id);
        $police_passage_type->restore();
    }
}
