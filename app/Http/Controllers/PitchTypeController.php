<?php

namespace App\Http\Controllers;

use App\Models\PitchType;
use App\Http\Requests\StorePitchTypeRequest;
use App\Http\Requests\UpdatePitchTypeRequest;

class PitchTypeController extends Controller
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
     * @param  \App\Http\Requests\StorePitchTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePitchTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PitchType  $pitchType
     * @return \Illuminate\Http\Response
     */
    public function show(PitchType $pitchType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PitchType  $pitchType
     * @return \Illuminate\Http\Response
     */
    public function edit(PitchType $pitchType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePitchTypeRequest  $request
     * @param  \App\Models\PitchType  $pitchType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePitchTypeRequest $request, PitchType $pitchType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PitchType  $pitchType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PitchType $pitchType)
    {
        //
    }
}
