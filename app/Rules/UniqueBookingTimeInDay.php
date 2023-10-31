<?php

namespace App\Rules;

use App\Models\Booking;
use Illuminate\Contracts\Validation\Rule;


class UniqueBookingTimeInDay implements Rule
{
    public function passes($attribute, $value)
    {
        // Lấy ID của bản ghi hiện tại
        $bookingId = request()->input('booking_id');

        // Lấy ngày từ trường 'booking_date'
        $date = date('Y-m-d', strtotime($value));

        // Kiểm tra xem có bất kỳ bản ghi nào khác có cùng khung giờ trong ngày không
        $existingBooking = Booking::where('booking_date', 'LIKE', $date . '%')
            ->where('id', '!=', $bookingId)
            ->exists();

        // Trả về true nếu không có bản ghi nào khác có cùng khung giờ trong ngày, ngược lại trả về false
        return !$existingBooking;
    }

    public function message()
    {
        return 'Có khung giờ trùng nhau trong cùng một ngày.';
    }
}
