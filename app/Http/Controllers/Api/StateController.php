<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $result = State::all();        
    //     return $result;
    // }

    public function index(Request $request)
    {
        $where = [];
        if ($request->has('country')) { 
            $where[] = ['country', '=', $request->get('country')];
        }
        if ($request->has('state_dsc')) { 
            $where[] = ['state_dsc', 'LIKE', $request->get('state_dsc').'%'];
        }
        $result = State::where($where);
        return $result->get();  

        // if ($request->has('country')) {    
        //     $country = $request->get('country');
        //     $result = State::where('country', '=', $country);
        // } else {
        //     if ($request->has('state_dsc')) {            
        //         $state_dsc = $request ->get('state_dsc');
        //         $result = State::where('state_dsc','LIKE', $state_dsc.'%');
        //         return $result->get();
        //     } else {
        //         $result = State::all();
        //         return $result;
        //     }
        // }
        
        // if ($request->has('state_dsc')) {            
        //     $state_dsc = $request ->get('state_dsc');
        //     $result->where('state_dsc','LIKE', $state_dsc.'%');
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
        if ($request->has('country')) { 
            $where[] = ['country', '=', $request->get('country')];
        }
        if ($request->has('state_dsc')) { 
            $where[] = ['state_dsc', 'LIKE', $request->get('state_dsc').'%'];
        }
        $result = State::withTrashed()->where($where)->orderBy('deleted_at', 'asc');
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
        $state = new State();

        $state->state_id = $request->state_id;
        $state->state_dsc = $request->state_dsc;
        $state->country = $request->country;

        $state->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = State::find($id);
        return $state;
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
        $state = State::find($id);
        $state->state_id = $request->state_id;
        $state->state_dsc = $request->state_dsc;
        $state->country = $request->country;

        $state->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::find($id);
        $state->delete();
    }

    public function restore($id)
    {
        $state = State::withTrashed()->find($id);
        $state->restore();
    }
}
