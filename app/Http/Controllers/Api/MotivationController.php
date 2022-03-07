<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Motivation;

class MotivationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Motivation::all();        
        return $result;
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index_trashed()
    {
        $result = Motivation::withTrashed()->orderBy('deleted_at', 'asc')->get();        
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
        $motivation = new Motivation();

        $motivation->motivation_id = $request->motivation_id;
        $motivation->motivation_dsc = $request->motivation_dsc;

        $motivation->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motivation = Motivation::find($id);
        return $motivation;
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
        $motivation = Motivation::find($id);
        $motivation->motivation_id = $request->motivation_id;
        $motivation->motivation_dsc = $request->motivation_dsc;
        $motivation->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motivation = Motivation::find($id);
        $motivation->delete();
    }

    public function restore($id)
    {
        $motivation = Motivation::withTrashed()->find($id);
        $motivation->restore();
    }
}
