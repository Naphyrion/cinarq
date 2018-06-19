<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\ResourceLog;

class ResourceLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resourceLogs = \App\ResourceLog::all();
        return $resourceLogs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $resourceLog = new ResourceLog;

        $resourceLog->pme_action = $request->pme_action;
        $resourceLog->project = $request->project;
        $resourceLog->extracurricular_activitie = $request->extracurricular_activitie;
        $resourceLog->description= $request->description;
        $resourceLog->applicant = $request->applicant;

        $resourceLog->save();
        
        return $resourceLog;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
        $resourceLog = \App\ResourceLog::find($id);

        $resourceLog->pme_action = $request->pme_action;
        $resourceLog->project = $request->project;
        $resourceLog->extracurricular_activitie = $request->extracurricular_activitie;
        $resourceLog->description= $request->description;
        $resourceLog->applicant = $request->applicant;

        $resourceLog->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $resourceLog = \App\ResourceLog::find($id);
        
        $resourceLog->delete();

    }
}
