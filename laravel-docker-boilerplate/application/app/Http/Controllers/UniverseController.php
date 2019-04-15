<?php

namespace App\Http\Controllers;

use App\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universes = Universe::all();
        return response()->json($universes);
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
        $universe = Universe::create($request->all());
        return response()->json($universe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function show(Universe $universe)
    {
        return response()->json($universe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Universe  $floor
     * @return \Illuminate\Http\Response
     */
    public function allBooths(Universe $universe)
    {
        return response()->json($universe->booths);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function edit(Universe $universe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $universe = Universe::findOrFail($id);
        $universe->fill($request->all())->save();
        return response()->json($universe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Universe  $universe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universe $universe)
    {
        //
    }
}
