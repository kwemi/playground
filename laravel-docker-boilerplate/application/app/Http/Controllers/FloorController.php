<?php

namespace App\Http\Controllers;

use App\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::all();
        return response()->json($floors);
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
        $floor = Floor::create($request->all());
        return response()->json($floor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function show(Floor $floor)
    {
        return response()->json($floor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function edit(Floor $floor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $floor = Floor::findOrFail($id);
        $floor->fill($request->all())->save();
        return response()->json($floor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Floor  $floor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Floor $floor)
    {
        //
    }
}
