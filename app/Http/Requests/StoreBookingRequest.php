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
            'booking_date' => ['required', 'date'],
            'customer_name' => ['required'],
            'customer_phone' => ['required', 'max:10'],
            'customer_nameclub'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'booking_date.required' => 'Vui lòng chọn ngày đặt sân',
            'booking_date.date' => 'Ngày đặt sân không hợp lệ',
            'customer_name.required' => 'Vui lòng nhập tên khách hàng',
            'customer_phone.required'=> 'Vui lòng nhập số điện thoại',
            'customer_nameclub.required'=> 'Vui lòng nhập tên đội'
        ];
    }
}
