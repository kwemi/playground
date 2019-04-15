<?php

namespace App\Http\Controllers;

use App\Booth;
use Illuminate\Http\Request;

class BoothController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booths = Booth::all();
        return response()->json($booths);
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
        $booth = Booth::create($request->all());
        return response()->json($booth);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function show(Booth $booth)
    {
        return response()->json($booth);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function allLevels(Booth $booth)
    {
        return response()->json($booth->levels);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function edit(Booth $booth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booth = Booth::findOrFail($id);
        $booth->fill($request->all())->save();
        return response()->json($booth);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booth  $booth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booth $booth)
    {
        //
    }
}
