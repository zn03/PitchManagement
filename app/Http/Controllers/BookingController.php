<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\BookingDetail;
use App\Models\Customer;
use App\Models\Pitch;
use App\Models\PitchType;
use App\Models\Staff;
use App\Models\Timeline;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pitches = Pitch::all();
        $bookings = DB::table('bookings')
            ->join('booking_details', 'bookings.id', '=', 'booking_details.booking_id')
            ->join('pitches', 'pitches.id', '=', 'booking_details.pitch_id')
            ->join('pitch_types', 'pitch_types.id', '=', 'pitches.pitch_type_id')
            ->join('timelines', 'timelines.id', '=', 'bookings.timeline_id')
            ->join('customers', 'customers.id', '=', 'bookings.customer_id')
            ->join('staffs', 'staffs.id', '=', 'bookings.staff_id')
            ->select('bookings.*', 'booking_details.*', 'pitches.*', 'pitch_types.*', 'timelines.*', 'customers.*', 'staffs.*')
            ->orderBy('bookings.id', 'desc')
            ->limit(8)
            ->get();

        $formattedBookings = [];
        foreach ($bookings as $booking) {
            $formattedBooking = $booking;
            $formattedBooking->booking_date = Carbon::parse($booking->booking_date)->format('d-m-Y');
            $formattedBookings[] = $formattedBooking;
        }
        return view('Admin.bookings.index', [
            'bookings' => $bookings,
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
        $pitches = Pitch::all();
        $timelines = Timeline::all();
        $staffs = Staff::all();

        return view('Admin.bookings.create', [
            'pitches' => $pitches,
            'timelines' => $timelines,
            'staffs'=> $staffs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBookingRequest $request)
    {
       if ($request->validated()){
           $array = [];
           $array = Arr::add($array, 'customer_name', $request->customer_name);
           $array = Arr::add($array, 'customer_phone', $request->customer_phone);
           $array = Arr::add($array, 'customer_nameclub', $request->customer_nameclub);
           $customer = Customer::create($array);
           $last_record = Customer::latest('id')->first()->toArray();

           $booking = [];
           $booking = Arr::add($booking, 'customer_id', $last_record['id']);
           $booking = Arr::add($booking, 'staff_id', $request->staff_id);
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
           flash()->addSuccess('Thêm mới thành công');
           return Redirect::route('bookings.index');
       } else
           flash()->addSuccess('Thêm mới thất bại');
           return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Booking $booking, $booking_id)
    {
        $timelines = Timeline::all();
        $pitches = Pitch::all();
        $staffs = Staff::all();

        $bookings = DB::table('bookings')
            ->join('booking_details', 'bookings.id', '=', 'booking_details.booking_id')
            ->join('pitches', 'pitches.id', '=', 'booking_details.pitch_id')
            ->join('pitch_types', 'pitch_types.id', '=', 'pitches.pitch_type_id')
            ->join('timelines', 'timelines.id', '=', 'bookings.timeline_id')
            ->join('customers', 'customers.id', '=', 'bookings.customer_id')
            ->join('staffs', 'staffs.id', '=', 'bookings.staff_id')
            ->select('bookings.*', 'booking_details.*', 'pitches.*', 'pitch_types.*', 'timelines.*', 'customers.*', 'staffs.*')
            ->where('bookings.id', $booking_id)
            ->get();

        return view ('Admin.bookings.edit', [
            'bookings' => $bookings,
            'timelines'=> $timelines,
            'pitches' => $pitches,
            'staffs' => $staffs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        if ($request->validated()){
            $array = [];
            $array = Arr::add($array, 'customer_name', $request->customer_name);
            $array = Arr::add($array, 'customer_phone', $request->customer_phone);
            $array = Arr::add($array, 'customer_nameclub', $request->customer_nameclub);
            $customer = Customer::create($array);
            $last_record = Customer::latest('id')->first()->toArray();

            $booking = [];
            $booking = Arr::add($booking, 'customer_id', $last_record['id']);
            $booking = Arr::add($booking, 'staff_id', $request->staff_id);
            $booking = Arr::add($booking, 'timeline_id', $request->timeline_id);
            $booking = Arr::add($booking, 'booking_date', $request->booking_date);
            $booking = Arr::add($booking, 'booking_note', $request->booking_note);

            $booking = Booking::where('id', $request->booking_id)->update($booking);

            flash()->addSuccess('Cập nhật thành công');
            return Redirect::route('bookings.index');
        } else
            return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Booking $booking, $booking_id)
    {
        $booking = Booking::where('id', $booking_id)->first();
        $booking->delete();
        return Redirect::route('bookings.index');
    }

    public function detail(Booking $booking_id ): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $bookings = DB::table('bookings')
            ->join('booking_details', 'bookings.id', '=', 'booking_details.booking_id')
            ->join('pitches', 'pitches.id', '=', 'booking_details.pitch_id')
            ->join('pitch_types', 'pitch_types.id', '=', 'pitches.pitch_type_id')
            ->join('timelines', 'timelines.id', '=', 'bookings.timeline_id')
            ->join('customers', 'customers.id', '=', 'bookings.customer_id')
            ->join('staffs', 'staffs.id', '=', 'bookings.staff_id')
            ->select('bookings.*', 'booking_details.*', 'pitches.*', 'pitch_types.*', 'timelines.*', 'customers.*', 'staffs.*')
            ->where('bookings.id', $booking_id->id)
            ->get();
        $formattedBookings = [];
        foreach ($bookings as $booking) {
            $formattedBooking = $booking;
            $formattedBooking->booking_date = Carbon::parse($booking->booking_date)->format('d-m-Y');
            $formattedBookings[] = $formattedBooking;
        }

        $customers = DB::table('customers')
            ->select('customers.*')
            ->where('customers.id', '=', $booking_id->customer_id)
            ->get();

        $booking_id = Booking::where('id', $booking_id->id)->first();

        $booking_detail = DB::table('bookings')
            ->join('booking_details', 'bookings.id', '=', 'booking_details.booking_id')
            ->where('booking_details.booking_id', '=', $booking_id->id)
            ->get();

        return view('Admin.bookings.booking_details', [
                'customers' => $customers,
                'booking_detail' => $booking_detail,
                'booking_id' => $booking_id,
                'bookings' => $bookings,

            ]);
    }
    public function confirm(Booking $booking_id){
        Booking::where('id', $booking_id->id)->update(['booking_status' => 1]);
        return Redirect::route('bookings.detail', $booking_id->id);
    }
    public function inProgess(Booking $booking_id){
        Booking::where('id', $booking_id->id)->update(['booking_status' => 2]);
        return Redirect::route('bookings.detail', $booking_id->id);
    }
    public function completeBooking(Booking $booking_id){
        Booking::where('id', $booking_id->id)->update(['booking_status' => 3]);
        return Redirect::route('bookings.detail', $booking_id->id);

    }
    public function cancelBooking(Booking $booking_id){
        Booking::where('id', $booking_id->id)->update(['booking_status' => 4]);
        return Redirect::route('bookings.detail', $booking_id->id);
    }
}
