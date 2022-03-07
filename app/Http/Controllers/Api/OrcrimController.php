<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Orcrim;

class OrcrimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Orcrim::all();        
        return $result;
    }
    
     /**
     * Display a listing of the resource, including deleted ones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_trashed()
    {
        $result = Orcrim::withTrashed()->orderBy('deleted_at', 'asc')->get();        
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
        $orcrim = new Orcrim();

        $orcrim->orcrim_id = $request->orcrim_id;
        $orcrim->orcrim_dsc = $request->orcrim_dsc;
        $orcrim->orcrim_expl = $request->orcrim_expl;

        $orcrim->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orcrim = Orcrim::find($id);
        return $orcrim;
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
        $orcrim = Orcrim::find($id);
        $orcrim->orcrim_id = $request->orcrim_id;
        $orcrim->orcrim_dsc = $request->orcrim_dsc;
        $orcrim->orcrim_expl = $request->orcrim_expl;
        $orcrim->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orcrim = Orcrim::find($id);
        $orcrim->delete();
    }

    public function restore($id)
    {
        $orcrim = Orcrim::withTrashed()->find($id);
        $orcrim->restore();
    }
}
