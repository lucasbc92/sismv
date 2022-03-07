<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EnvironmentLocalization;

class EnvironmentLocalizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = EnvironmentLocalization::all();        
        return $result;
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed()
    {
        $result = EnvironmentLocalization::withTrashed()->orderBy('deleted_at', 'asc')->get();        
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
        $environment_localization = new EnvironmentLocalization();

        $environment_localization->environment_localization_id = $request->environment_localization_id;
        $environment_localization->environment_localization_dsc = $request->environment_localization_dsc;

        $environment_localization->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $environment_localization = EnvironmentLocalization::find($id);
        return $environment_localization;
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
        $environment_localization = EnvironmentLocalization::find($id);
        $environment_localization->environment_localization_id = $request->environment_localization_id;
        $environment_localization->environment_localization_dsc = $request->environment_localization_dsc;
        $environment_localization->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $environment_localization = EnvironmentLocalization::find($id);
        $environment_localization->delete();
    }

    public function restore($id)
    {
        $environment_localization = EnvironmentLocalization::withTrashed()->find($id);
        $environment_localization->restore();
    }
}
