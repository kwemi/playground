<?php

namespace App\Http\Controllers;

use App\BoothLevel;
use Illuminate\Http\Request;

class BoothLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boothLevels = BoothLevel::all();
        return response()->json($boothLevels);
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
        $boothLevel = BoothLevel::create($request->all());
        return response()->json($boothLevel);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoothLevel  $boothLevel
     * @return \Illuminate\Http\Response
     */
    public function show(BoothLevel $boothLevel)
    {
        return response()->json($boothLevel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoothLevel  $boothLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(BoothLevel $boothLevel)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoothLevel  $boothLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoothLevel $boothLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoothLevel  $boothLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoothLevel $boothLevel)
    {
        //
    }
}
