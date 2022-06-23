<?php

namespace App\Http\Controllers;

use App\Models\ItemStore;
use App\Http\Requests\StoreItemStoreRequest;
use App\Http\Requests\UpdateItemStoreRequest;

class ItemStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreItemStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItemStore  $itemStore
     * @return \Illuminate\Http\Response
     */
    public function show(ItemStore $itemStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItemStore  $itemStore
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemStore $itemStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateItemStoreRequest  $request
     * @param  \App\Models\ItemStore  $itemStore
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemStoreRequest $request, ItemStore $itemStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItemStore  $itemStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItemStore $itemStore)
    {
        //
    }
}
