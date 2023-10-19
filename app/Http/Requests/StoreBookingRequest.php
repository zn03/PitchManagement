<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'booking_date' => ['required|date'],
            'booking_note' => ['required'],
            'customer_name' => ['required'],
            'customer_phone' => ['required|string|max:10'],
            'customer_email' => ['required|email'],
            'customer_address' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'booking_date.required' => 'Vui lòng chọn ngày đặt sân',
            'booking_note.required' => 'Vui lòng nhập ghi chú',
            'customer_name.required' => 'Vui lòng nhập tên khách hàng',
            'customer_phone.required' => 'Vui lòng nhập số điện thoại',
            'customer_phone.max' => 'Số điện thoại không hợp lệ',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không hợp lệ',
            'customer_address.required' => 'Vui lòng nhập địa chỉ',

        ];
    }
}
