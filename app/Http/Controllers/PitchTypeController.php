<?php

namespace App\Http\Controllers;

use App\Models\PitchType;
use App\Http\Requests\StorePitchTypeRequest;
use App\Http\Requests\UpdatePitchTypeRequest;
use Illuminate\Support\Facades\Redirect;

class PitchTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pitchTypes = PitchType::all();
        return view('Admin.pitch_types.index', [
            'pitchTypes' => $pitchTypes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Admin.pitch_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePitchTypeRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePitchTypeRequest $request)
    {
        if ($request->validated()) {
            PitchType::create($request->all());
            flash()->addSuccess('Thêm mới thành công');
            return Redirect::route('pitch_types.index');
        } else {
            return Redirect::back();
        }
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(PitchType $pitchType)
    {
        return view('Admin.pitch_types.edit', [
            'pitchType' => $pitchType
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePitchTypeRequest  $request
     * @param  \App\Models\PitchType  $pitchType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePitchTypeRequest $request, PitchType $pitchType)
    {
        if ($request->validated()) {
            $pitchType->update($request->all());
            flash()->addSuccess('Cập Nhật Thành Công');
            return Redirect::route('pitch_types.index');
        } else {
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PitchType  $pitchType
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PitchType $pitchType)
    {
        if($pitchType->pitches->count() > 0){
            flash()->addError('Không thể xóa loại sân này!');
            return Redirect::route('pitch_types.index');
        } else{
            $pitchType->delete();
            flash()->addSuccess('Xóa thành công');
            return Redirect::route('pitch_types.index');}
    }
}
