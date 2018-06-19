<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resource;
use App\ResourceLog;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $resources = \App\Resource::all();
        return $resources;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 

        $resource = new Resource;

        $resource->name = $request->name;
        $resource->description = $request->description;
        $resource->cost = $request->cost;
        
        $resource->save();

        $resource->ResourceLogs()->attach($request->resourceLogID);
        $resourceLog = ResourceLog::find($request->resourceLogID);
        $resources = $resourceLog->resources()->get();
        return $resources;
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
        $resource = \App\Resource::find($id);
        $resource->name = $request->name;
        $resource->description = $request->description;
        $resource->cost = $request->cost;

        $resource->save();
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
        $resource = \App\Resource::find($id);
        
        $resource->delete();
    }
}
