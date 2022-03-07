<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EnvironmentType;

class EnvironmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $result = EnvironmentType::all();        
    //     return $result;
    // }

    public function index(Request $request)
    {
        if ($request->has('environment_classification')) {    
            $environment_classification = $request->get('environment_classification');
            $result = EnvironmentType::where('environment_classification', '=', $environment_classification);
        } else {
            $result = EnvironmentType::all();
            return $result;
        }

        return $result->get();
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed(Request $request)
    {
        if ($request->has('environment_classification')) {    
            $environment_classification = $request->get('environment_classification');
            $result = EnvironmentType::withTrashed()->where('environment_classification', '=', $environment_classification)->orderBy('deleted_at', 'asc');
        } else {
            $result = EnvironmentType::withTrashed()->get();
            return $result;
        }

        return $result->get();
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
        $environment_type = new EnvironmentType();

        $environment_type->environment_type_id = $request->environment_type_id;
        $environment_type->environment_type_dsc = $request->environment_type_dsc;
        $environment_type->environment_classification = $request->environment_classification;

        $environment_type->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $environment_type = EnvironmentType::find($id);
        return $environment_type;
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
        $environment_type = EnvironmentType::find($id);
        $environment_type->environment_type_id = $request->environment_type_id;
        $environment_type->environment_type_dsc = $request->environment_type_dsc;
        $environment_type->environment_classification = $request->environment_classification;
        $environment_type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $environment_type = EnvironmentType::find($id);
        $environment_type->delete();
    }

    public function restore($id)
    {
        $environment_type = EnvironmentType::withTrashed()->find($id);
        $environment_type->restore();
    }
}