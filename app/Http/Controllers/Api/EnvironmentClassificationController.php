<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EnvironmentClassification;

class EnvironmentClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $result = EnvironmentClassification::all();        
    //     return $result;
    // }

    public function index(Request $request)
    {
        if ($request->has('environment_localization')) {    
            $environment_localization = $request->get('environment_localization');
            $result = EnvironmentClassification::where('environment_localization', '=', $environment_localization);
        } else {
            $result = EnvironmentClassification::all();
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
        if ($request->has('environment_localization')) {    
            $environment_localization = $request->get('environment_localization');
            $result = EnvironmentClassification::withTrashed()->where('environment_localization', '=', $environment_localization)->orderBy('deleted_at', 'asc');
        } else {
            $result = EnvironmentClassification::withTrashed()->get();
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
        $environment_classification = new EnvironmentClassification();

        $environment_classification->environment_classification_id = $request->environment_classification_id;
        $environment_classification->environment_classification_dsc = $request->environment_classification_dsc;
        $environment_classification->environment_localization = $request->environment_localization;

        $environment_classification->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $environment_classification = EnvironmentClassification::find($id);
        return $environment_classification;
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
        $environment_classification = EnvironmentClassification::find($id);
        $environment_classification->environment_classification_id = $request->environment_classification_id;
        $environment_classification->environment_classification_dsc = $request->environment_classification_dsc;
        $environment_classification->environment_localization = $request->environment_localization;
        $environment_classification->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $environment_classification = EnvironmentClassification::find($id);
        $environment_classification->delete();
    }

    public function restore($id)
    {
        $environment_classification = EnvironmentClassification::withTrashed()->find($id);
        $environment_classification->restore();
    }
}
