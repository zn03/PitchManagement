<?php

namespace App\Rules;

use App\Models\Booking;
use Illuminate\Contracts\Validation\Rule;

class UniqueBookingTime implements Rule
{
    public function passes($attribute, $value)
    {
        // Lấy ID của bản ghi hiện tại
        $bookingId = request()->input('booking_id');

        // Kiểm tra xem có bất kỳ bản ghi nào khác có cùng khung giờ trong ngày không
        $existingBooking = Booking::where('booking_date', $value)
            ->where('id', '!=', $bookingId)
            ->exists();

        return !$existingBooking;
    }

    public function message()
    {
        return 'Khung giờ đã được đặt trong ngày.';
    }
}
