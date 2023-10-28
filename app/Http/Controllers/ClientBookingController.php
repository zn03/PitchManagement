<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Http\Requests\StoreBookingDetailRequest;
use App\Http\Requests\UpdateBookingDetailRequest;
use App\Models\Customer;
use App\Models\Pitch;
use App\Models\Staff;
use App\Models\Timeline;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;

class ClientBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $pitches = Pitch::all();
        $timelines = Timeline::all();
        $staffs = Staff::all();

        return view('Client.booking', [
            'pitches' => $pitches,
            'timelines' => $timelines,
            'staffs'=> $staffs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingDetailRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBookingDetailRequest $request)
    {
        $array = [];
        $array = Arr::add($array, 'customer_name', $request->customer_name);
        $array = Arr::add($array, 'customer_phone', $request->customer_phone);
        $array = Arr::add($array, 'customer_nameclub', $request->customer_nameclub);
        $customer = Customer::create($array);
        $last_record = Customer::latest('id')->first()->toArray();

        $booking = [];
        $booking = Arr::add($booking, 'customer_id', $last_record['id']);
        $booking = Arr::add($booking, 'staff_id', '1');
        $booking = Arr::add($booking, 'timeline_id', $request->timeline_id);
        $booking = Arr::add($booking, 'booking_date', $request->booking_date);
        $booking = Arr::add($booking, 'booking_status', '1');
        $booking = Arr::add($booking, 'booking_note', $request->booking_note);
        $booking = Booking::create($booking);

        $last_record_booking = Booking::latest('id')->first()->toArray();

        $booking = Booking::join('timelines', 'timelines.id', '=', 'bookings.timeline_id')
            ->where('bookings.id', $last_record_booking['id'])
            ->first();

        $pitch = Pitch::join('pitch_types', 'pitch_types.id', '=', 'pitches.pitch_type_id')
            ->where('pitches.id', $request->pitch_id)
            ->first();

        if ($booking && $pitch) {
            $result = $booking->timeline_price + $pitch->pitchtype_price;
        } else {
            $result = 0;
        }
        $bookingDetail = [];
        $bookingDetail = Arr::add($bookingDetail, 'booking_id', $last_record_booking['id']);
        $bookingDetail = Arr::add($bookingDetail, 'pitch_id', $request->pitch_id);
        $bookingDetail = Arr::add($bookingDetail, 'current_price', $result);

        $bookingDetail = BookingDetail::create($bookingDetail);
        flash()->addSuccess('Đặt sân thành công!');
        return Redirect::route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingDetailRequest  $request
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingDetailRequest $request, BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingDetail  $bookingDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingDetail $bookingDetail)
    {
        //
    }
}
