<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $result = City::all();        
    //     return $result;
    // }

    public function index(Request $request)
    {
        $where = [];
        if ($request->has('state')) { 
            $where[] = ['state', '=', $request->get('state')];
        }
        if ($request->has('city_dsc')) { 
            $where[] = ['city_dsc', 'LIKE', $request->get('city_dsc').'%'];
        }
        $result = City::where($where);
        return $result->get();  

        // if ($request->has('state')) {    
        //     $state = $request->get('state');
        //     $result = City::where('state', '=', $state);
        // } else {
        //     if ($request->has('city_dsc')) {            
        //         $city_dsc = $request ->get('city_dsc');
        //         $result = City::where('city_dsc','LIKE', $city_dsc.'%');
        //         return $result->get();
        //     } else {
        //         $result = City::all();
        //         return $result;
        //     }
        // }
        
        // if ($request->has('city_dsc')) {            
        //     $city_dsc = $request ->get('city_dsc');
        //     $result->where('city_dsc','LIKE', $city_dsc.'%');
        // }              
    }

    /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
     public function index_trashed(Request $request)
    {
        $where = [];
        if ($request->has('state')) { 
            $where[] = ['state', '=', $request->get('state')];
        }
        if ($request->has('city_dsc')) { 
            $where[] = ['city_dsc', 'LIKE', $request->get('city_dsc').'%'];
        }
        $result = City::withTrashed()->where($where)->orderBy('deleted_at', 'asc');
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
        $city = new City();

        $city->city_id = $request->city_id;
        $city->city_dsc = $request->city_dsc;
        $city->state = $request->state;
        $city->ibge_code = $request->ibge_code;

        $city->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::find($id);
        return $city;
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
        $city = City::find($id);
        $city->city_id = $request->city_id;
        $city->city_dsc = $request->city_dsc;
        $city->state = $request->state;
        $city->ibge_code = $request->ibge_code;
        $city->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
    }

    public function restore($id)
    {
        $city = City::withTrashed()->find($id);
        $city->restore();
    }
}
