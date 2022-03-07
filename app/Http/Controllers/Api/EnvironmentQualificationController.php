<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnvironmentQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EnvironmentQualification;

class EnvironmentQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $result = EnvironmentQualification::all();        
    //     return $result;
    // }

    public function index(Request $request)
    {
        if ($request->has('environment_classification')) {    
            $environment_classification = $request->get('environment_classification');
            $result = EnvironmentQualification::where('environment_classification', '=', $environment_classification);
        } else {
            $result = EnvironmentQualification::all();
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
            $result = EnvironmentQualification::withTrashed()->where('environment_classification', '=', $environment_classification)->orderBy('deleted_at', 'asc');
        } else {
            $result = EnvironmentQualification::withTrashed()->get();
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
        $environment_qualification = new EnvironmentQualification();

        $environment_qualification->environment_qualification_id = $request->environment_qualification_id;
        $environment_qualification->environment_qualification_dsc = $request->environment_qualification_dsc;
        $environment_qualification->environment_classification = $request->environment_classification;

        $environment_qualification->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $environment_qualification = EnvironmentQualification::find($id);
        return $environment_qualification;
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
        $environment_qualification = EnvironmentQualification::find($id);
        $environment_qualification->environment_qualification_id = $request->environment_qualification_id;
        $environment_qualification->environment_qualification_dsc = $request->environment_qualification_dsc;
        $environment_qualification->environment_classification = $request->environment_classification;
        $environment_qualification->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $environment_qualification = EnvironmentQualification::find($id);
        $environment_qualification->delete();
    }

    public function restore($id)
    {
        $environment_qualification = EnvironmentQualification::withTrashed()->find($id);
        $environment_qualification->restore();
    }
}