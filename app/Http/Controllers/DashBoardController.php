<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Pitch;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $pitch = Pitch::all();
        $count_pitch = count($pitch);

        $bookings = DB::table('bookings')
            ->join('booking_details', 'bookings.id', '=', 'booking_details.booking_id')
            ->join('pitches', 'pitches.id', '=', 'booking_details.pitch_id')
            ->join('pitch_types', 'pitch_types.id', '=', 'pitches.pitch_type_id')
            ->join('timelines', 'timelines.id', '=', 'bookings.timeline_id')
            ->join('customers', 'customers.id', '=', 'bookings.customer_id')
            ->join('staffs', 'staffs.id', '=', 'bookings.staff_id')
            ->select('bookings.*', 'booking_details.*', 'pitches.*', 'pitch_types.*', 'timelines.*', 'customers.*', 'staffs.*')
            ->orderBy('bookings.id', 'desc')
            ->get();
        $count_booking = count($bookings);

        $booking_status = Booking::where('booking_status', '3')->get();
        $count_bookingStatus = count($booking_status);

        $total_price = DB::table('bookings')
             ->join('booking_details', 'bookings.id', '=', 'booking_details.booking_id')
             ->select('bookings.*', 'booking_details.*')
             ->get()
             ->where('booking_status', '3')
             ->sum('current_price');

        return view('Admin.dashboard.index', [
            'count_booking' => $count_booking,
            'count_bookingStatus' => $count_bookingStatus,
            'bookings' => $bookings,
            'total_price' => $total_price,
            'count_pitch' => $count_pitch,
        ]);
    }
}
