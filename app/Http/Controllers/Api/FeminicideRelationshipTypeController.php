<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\FeminicideRelationshipType;

class FeminicideRelationshipTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = FeminicideRelationshipType::all();        
        return $result;
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed()
    {
        $result = FeminicideRelationshipType::withTrashed()->orderBy('deleted_at', 'asc')->get();        
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
        $feminicide_relationship_type = new FeminicideRelationshipType();

        $feminicide_relationship_type->feminicide_relationship_type_id = $request->feminicide_relationship_type_id;
        $feminicide_relationship_type->feminicide_relationship_type_dsc = $request->feminicide_relationship_type_dsc;

        $feminicide_relationship_type->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feminicide_relationship_type = FeminicideRelationshipType::find($id);
        return $feminicide_relationship_type;
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
        $feminicide_relationship_type = FeminicideRelationshipType::find($id);
        $feminicide_relationship_type->feminicide_relationship_type_id = $request->feminicide_relationship_type_id;
        $feminicide_relationship_type->feminicide_relationship_type_dsc = $request->feminicide_relationship_type_dsc;
        $feminicide_relationship_type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feminicide_relationship_type = FeminicideRelationshipType::find($id);
        $feminicide_relationship_type->delete();
    }

    public function restore($id)
    {
        $feminicide_relationship_type = FeminicideRelationshipType::withTrashed()->find($id);
        $feminicide_relationship_type->restore();
    }
}
