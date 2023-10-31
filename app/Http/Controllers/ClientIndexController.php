<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingDetail;
use App\Http\Requests\StoreBookingDetailRequest;
use App\Http\Requests\UpdateBookingDetailRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('Client.index', );
    }

    public function searchBooking(Request $request){
        $bookings = Booking::where('id', $request->key)->get();
        return view('Client.searchBooking',[
            'bookings' => $bookings,
        ]);
    }
    public function searchBookingProcess(Request $request){
        $bookings = DB::table('bookings')
            ->join('booking_details', 'bookings.id', '=', 'booking_details.booking_id')
            ->join('pitches', 'pitches.id', '=', 'booking_details.pitch_id')
            ->join('timelines', 'timelines.id', '=', 'bookings.timeline_id')
            ->join('customers', 'customers.id', '=', 'bookings.customer_id')
            ->select('bookings.*',
                'customers.id',
                'customers.customer_name',
                'customers.customer_phone',
                'customers.customer_nameclub',
                'timelines.timeline_start',
                'timelines.timeline_end',
                'booking_details.current_price',
                'pitches.pitch_number'
                )
            ->where('customers.customer_phone', $request->input('customer_phone'))
            ->get();
        $formattedBookings = [];
        foreach ($bookings as $booking) {
            $formattedBooking = $booking;
            $formattedBooking->booking_date = Carbon::parse($booking->booking_date)->format('d-m-Y');
            $formattedBookings[] = $formattedBooking;
        }
        return view('Client.searchBooking',[
            'bookings' => $bookings,
        ]);
    }

}
