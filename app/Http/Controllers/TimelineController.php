<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use App\Http\Requests\StoreTimelineRequest;
use App\Http\Requests\UpdateTimelineRequest;
use Illuminate\Support\Facades\Redirect;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $timelines = Timeline::all();
        return view('Admin.timelines.index', [
            'timelines' => $timelines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Admin.timelines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTimelineRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreTimelineRequest $request)
    {
        if ($request->validated()) {
            Timeline::create($request->all());
            return Redirect::route('timelines.index');
        } else {
            return Redirect::back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function show(Timeline $timeline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Timeline $timeline)
    {
        return view('Admin.timelines.edit', [
            'timeline' => $timeline,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTimelineRequest  $request
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateTimelineRequest $request, Timeline $timeline)
    {
        $timeline->update($request->all());
        return Redirect::route('timelines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Timeline $timeline)
    {
        $timeline->delete();
        // Quay về trang danh sách
        return Redirect::route('timelines.index');
    }
}
