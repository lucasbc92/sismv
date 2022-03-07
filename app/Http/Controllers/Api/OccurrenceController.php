<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Occurrence;

class OccurrenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Occurrence::all();        
        return $result;
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed()
    {
        $result = Occurrence::withTrashed()->orderBy('deleted_at', 'asc')->get();        
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
        $occurrence = new Occurrence();

        $occurrence->bo_unity = $request->bo_unity;
        $occurrence->bo_year = $request->bo_year; 
        $occurrence->bo_number = $request->bo_number;
        $occurrence->fact_date = $request->fact_date;
        $occurrence->fact_hour = $request->fact_hour;
        $occurrence->local_address = $request->local_address;
        $occurrence->local_address_number = $request->local_address_number;
        $occurrence->local_lat_long = $request->local_lat_long;
        if($request->has('local_complement')){
            $occurrence->local_complement = $request->local_complement;
        }
        $occurrence->local_city = $request->local_city;
        $occurrence->local_localization = $request->local_localization;
        $occurrence->local_classification = $request->local_classification;
        $occurrence->local_type = $request->local_type;
        $occurrence->local_qualification = $request->local_qualification;
        $occurrence->local_zone = $request->local_zone;
        $occurrence->observations = $request->observations;
        if($request->has('process_unity')){
            $occurrence->process_unity = $request->process_unity;
        }
        if($request->has('process_year')){
            $occurrence->process_year = $request->process_year;
        }
        if($request->has('process_number')){
            $occurrence->process_number = $request->process_number;
        }
        if($request->has('typification')){
            $occurrence->typification = $request->typification;
        }
        if($request->has('process_assessment_date')){
            $occurrence->process_assessment_date = $request->process_assessment_date;
        }
        if($request->has('process_referral_date')){
            $occurrence->process_referral_date = $request->process_referral_date;
        }
        if($request->has('process_id')){
            $occurrence->process_id = $request->process_id;
        }

        $occurrence->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $occurrence = Occurrence::find($id);
        return $occurrence;
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
        $occurrence = Occurrence::find($id);
        $occurrence->occurrence_id = $request->occurrence_id;
        $occurrence->occurrence_dsc = $request->occurrence_dsc;
        $occurrence->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $occurrence = Occurrence::find($id);
        $occurrence->delete();
    }

    public function restore($id)
    {
        $occurrence = Occurrence::withTrashed()->find($id);
        $occurrence->restore();
    }
}
