<?php

namespace App\Http\Controllers;

use App\BasketProduct;
use Illuminate\Http\Request;

class BasketProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basketProducts = BasketProduct::all();
        return response()->json($basketProducts);
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
        $basketProduct = BasketProduct::create($request->all());
        return response()->json($basketProduct);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */
    public function show(BasketProduct $basketProduct)
    {
        dd($basketProduct);
        return response()->json($basketProduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(BasketProduct $basketProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $basketProduct = Basket::findOrFail($id);
        $basketProduct->fill($request->all())->save();
        return response()->json($basketProduct);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BasketProduct  $basketProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasketProduct $basketProduct)
    {
        //
    }
}
