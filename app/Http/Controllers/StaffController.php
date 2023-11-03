<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('Admin.staffs.index', [
            'staffs' => $staffs,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Admin.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreStaffRequest $request)
    {
         if ($request->validated()) {
             Staff::create([
                 'staff_name' => $request->staff_name,
                 'staff_address' => $request->staff_address,
                 'staff_phone' => $request->staff_phone,
                 'email' => $request->email,
                 'password' =>  Hash::make($request->password),
             ]);
            flash()->addSuccess('Thêm mới thành công');
            return Redirect::route('staffs.index');
        } else {
            return Redirect::back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Staff $staff)
    {
        return view('Admin.staffs.edit', [
            'staff' => $staff,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        if ($request->validated()) {
            $staff->update([
                'staff_name' => $request->staff_name,
                'staff_address' => $request->staff_address,
                'staff_phone' => $request->staff_phone,
                'email' => $request->email,
                'password' =>  Hash::make($request->password),
            ]);
            flash()->addSuccess('Cập nhật thành công');
            return Redirect::route('staffs.index');
        } else {
            return Redirect::back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        if ($staff->bookings->count()> 0){
            flash()->addError('Không thể xóa nhân viên này!');
            return Redirect::route('staffs.index');
        } else {
            $staff->delete();
            flash()->addSuccess('Xóa thành công');
            return Redirect::route('staffs.index');
        }
    }

    public function login()
    {
        return view('Client.login');
    }

    public function loginProcess(Request $request)
    {
        $account = $request->only(['email', 'password']);
        if (Auth::guard('staffs')->attempt($account)) {
            $staff = Auth::guard('staffs')->user();
            Auth::guard('staffs')->login($staff);
            session(['staff' => $staff]);
            flash()->addSuccess('Đăng nhập thành công');
            return Redirect::route('dashboard.index');
        } else {
            flash()->addError('Đăng nhập thất bại');
            return Redirect::back();
        }
    }

    public function logout()
    {
        Auth::guard('staffs')->logout();
        session()->forget('staff');
        return Redirect::route('client.index');
    }
}
