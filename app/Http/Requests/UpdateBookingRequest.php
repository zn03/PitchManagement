<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
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
            'booking_date' => ['required'],
            'booking_note' => ['required'],
            'customer_name' => ['required'],
            'customer_phone' => ['required'],
            'customer_nameclub' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'booking_date.required' => 'Vui lòng nhập ngày đặt sân',
            'booking_note.required' => 'Vui lòng nhập ghi chú',
            'customer_name.required' => 'Vui lòng nhập tên khách hàng',
            'customer_phone.required' => 'Vui lòng nhập số điện thoại',
            'customer_nameclub.required' => 'Vui lòng nhập tên câu lạc bộ',
        ];
    }
}
