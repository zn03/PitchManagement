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
        if ($request->validated()) {
            Pitch::create($request->all());
            flash()->addSuccess('Thêm mới thành công');
            return Redirect::route('pitches.index');
        } else {
            return Redirect::back();
        }
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
        if ($request->validated()) {
            $pitch->update($request->all());
            flash()->addSuccess('Cập nhật thành công');
            return Redirect::route('pitches.index');
        } else {
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pitch  $pitch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Pitch $pitch)
    {
        if ($pitch->bookingDetail->count() > 0) {
            flash()->addError('Không thể xóa sân này!');
            return Redirect::route('pitches.index');
        }else{
            $pitch->delete();
            flash()->addSuccess('Xóa thành công');
            return Redirect::route('pitches.index');
        }
    }
}
