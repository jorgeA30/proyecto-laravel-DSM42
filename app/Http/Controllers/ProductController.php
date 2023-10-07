<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    //
    public function index()
    {
        //
        return "lista de index";
    }

    /**
     */
    public function create()
    {
        //
        return "create de create";
    }

    /**

     */
    public function store(Request $request)
    {
        //
        return "ver el store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    public function show(Product $product)
    {
        //
        return  "ver el show  {$product}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    public function edit(Product $product)
    {
        //
        return "ver el edit {$product}";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    public function update(Request $request, Product $product)
    {
        //
        return "ver el update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    public function destroy(Product $product)
    {
        //
        return "ver el destroy";
    }
}

