<?php

namespace App\Http\Controllers;

use App\Models\Pitch;
use App\Http\Requests\StorePitchRequest;
use App\Http\Requests\UpdatePitchRequest;
use App\Models\PitchType;
use Illuminate\Support\Facades\Redirect;

class PitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pitches = Pitch::with('pitchType')->get();
        return view('Admin.pitches.index', [
                'pitches' => $pitches,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
            $pitchTypes = PitchType::all();
            return view('Admin.pitches.create', [
                'pitchTypes' => $pitchTypes,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePitchRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePitchRequest $request)
    {
        Pitch::create($request->all());
        return Redirect::route('pitches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function show(Pitch $pitch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Pitch $pitch)
    {
        $pitchTypes = PitchType::all();
        return view('Admin.pitches.edit', [
            'pitch' => $pitch,
            'pitchTypes' => $pitchTypes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePitchRequest  $request
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePitchRequest $request, Pitch $pitch)
    {
        $pitch->update($request->all());
        return Redirect::route('pitches.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Pitch $pitch)
    {
        $pitch->delete();
        return Redirect::route('pitches.index');
    }
}
